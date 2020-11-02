<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialMedia;
use Carbon\Carbon;
use Session;

class ManageController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function social(){
      $data=SocialMedia::find(1);
      return view('admin.manage.social',compact('data'));
    }

    public function social_update(){
      $update=SocialMedia::where('sm_status',1)->where('sm_id',1)->update([
        'sm_facebook'=>$_POST['facebook'],
        'sm_twitter'=>$_POST['twitter'],
      ]);
      if($update){
        return redirect('admin/manage/social');
      }else{
        return redirect('admin/manage/social');
      }
    }
}
