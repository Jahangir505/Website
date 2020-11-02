<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      $totalUser=User::where('status',1)->count('id');
      return view('admin.dashboard.index',compact('totalUser'));
    }
}
