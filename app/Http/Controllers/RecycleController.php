<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Carbon\Carbon;
use Session;
class RecycleController extends Controller{
    public function __construct(){
        $this->middleware('superadmin');
        $this->middleware('auth');
    }

    public function index(){

    }

    public function banner(){
        $all=Banner::where('ban_status',0)->get();
        return view('admin.recycle.banner',compact('all'));
    }

    public function banner_restore($id){
        $soft=Banner::where('ban_status',0)->where('ban_id',$id)->update([
          'ban_status'=>1,
        ]);

        if($soft){
          Session::flash('softdel_success','value');
          return redirect('admin/recycle/banner');
        }else{
          Session::flash('softdel_error','value');
          return redirect('admin/recycle/banner');
        }
    }

    public function banner_delete(){
        $id=$_POST['modal_id'];
        $del=Banner::where('ban_status',0)->where('ban_id',$id)->delete();
        if($del){
          Session::flash('delete_success','value');
          return redirect('admin/recycle/banner');
        }else{
          Session::flash('delete_error','value');
          return redirect('admin/recycle/banner');
        }
    }
}
