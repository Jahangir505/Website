<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageContent;
use Carbon\Carbon;
use Session;

class PageContentController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=PageContent::where('pagecon_status',1)->get();
      return view('admin.page-content.all',compact('all'));
    }
}
