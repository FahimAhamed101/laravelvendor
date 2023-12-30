<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function dashboard(){
        return view('admin.dashboard');

    }

}