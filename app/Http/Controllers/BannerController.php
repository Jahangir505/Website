<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Carbon\Carbon;
use Session;
use Image;
class BannerController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $all=Banner::where('ban_status',1)->get();
        return view('admin.banner.all',compact('all'));
    }

    public function add(){
      return view('admin.banner.add');
    }

    public function edit(){

    }

    public function view(){

    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=Banner::where('ban_status',1)->where('ban_id',$id)->update([
          'ban_status'=>0,
        ]);

        if($soft){
          Session::flash('softdel_success','value');
          return redirect('admin/banner');
        }else{
          Session::flash('softdel_error','value');
          return redirect('admin/banner');
        }
    }

    public function insert(Request $request){
        $this->validate($request,[
            'title'=>'required'
        ],[
            'title.required'=>'Please enter banner title!'
        ]);

        $insert=Banner::insertGetId([
            'ban_title'=>$_POST['title'],
            'ban_subtitle'=>$_POST['subtitle'],
            'ban_button'=>$_POST['button'],
            'ban_button_url'=>$_POST['url'],
            'ban_photo'=>'',
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='banner_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/'.$imageName));
        }

        Banner::where('ban_id',$insert)->update([
          'ban_photo'=>$imageName
        ]);

        if($insert){
          return redirect('admin/banner');
        }else{
          return redirect('admin/banner');
        }
    }

    public function update(){

    }
}
