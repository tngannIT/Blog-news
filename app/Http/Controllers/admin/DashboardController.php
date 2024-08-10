<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\UserController;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        return view('admin.pages.dashboard.index');
    }

}
