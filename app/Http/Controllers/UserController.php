<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('superadmin');
    }

    public function index(){
      $users=User::all();
      return view('admin.user.all',compact('users'));
    }

    public function view(){

    }

    public function edit(){
      
    }
}
