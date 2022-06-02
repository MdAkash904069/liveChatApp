<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
