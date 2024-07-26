<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       $usertype=Auth::user()->usertype;
       if($usertype=='admin'){
        return view('admin.dashboard');
       }
       else
       {
        return view('pages/dashboard_user/dashboard');
       }
    }
}
