<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class ContactusController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all=Contactus::where('conus_status',1)->orderBy('conus_id','DESC')->get();
        return view('admin.contactus.all',compact('all'));
    }

    public function view($id){
        $data=Contactus::where('conus_status',1)->where('conus_id',$id)->firstOrFail();
        return view('admin.contactus.view',compact('data'));
    }

    public function soft_delete($id){
      $softdel=Contactus::where('conus_status',1)->where('conus_id',$id)->update([
        'conus_status'=>0
      ]);

      if($softdel){
        return redirect('admin/contactus');
      }else{
        return redirect('admin/contactus');
      }
    }
}
