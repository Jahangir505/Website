<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use App\SocialMedia;
use App\Banner;
use App\PageContent;
use Carbon\Carbon;
use Session;
class WebsiteController extends Controller
{
    public function __construct(){

    }

    public function index(){
      $banners=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->limit(1)->get();
      $about=PageContent::where('pagecon_status',1)->findOrFail(1);
      $idea=PageContent::where('pagecon_status',1)->findOrFail(2);
      return view('website.index',compact('banners','about','idea'));
    }

    public function about(){
      return view('website.about');
    }

    public function contact(){
      $media=SocialMedia::find(1);
      return view('website.contact',compact('media'));
    }

    public function service(){
      return view('website.service');
    }

    public function portfolio(){
      return view('website.portfolio');
    }

    public function portfolio_view(){
      return view('website.portfolio-view');
    }

    public function blog(){
      return view('website.blog');
    }

    public function blog_view(){
      return view('website.blog-view');
    }

    public function insert_contact(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required',
      ],[
        'name.required'=>'Please enter your name!',
        'email.required'=>'Please enter your email address!',
      ]);
      $insert=Contactus::insert([
        'conus_name'=>htmlentities($_POST['name'],ENT_QUOTES),
        'conus_email'=>htmlentities($_POST['email'],ENT_QUOTES),
        'conus_sub'=>htmlentities($_POST['sub'],ENT_QUOTES),
        'conus_mess'=>htmlentities($_POST['mess'],ENT_QUOTES),
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){
        Session::flash('success','value');
        return redirect('contact');
      }else{
        Session::flash('error','value');
        return redirect('contact');
      }
    }
}
