<?php

namespace App\Http\Controllers;

use App\Models\DataFeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        $usertype = Auth::user()->usertype;


        if ($usertype == 'admin') {

            return view('admin.dashboard', compact('dataFeed'));
        } else {

            return view('pages.dashboard_user.dashboard', compact('dataFeed'));
        }


    }

}
