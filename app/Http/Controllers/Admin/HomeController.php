<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function index(){

    }

    public function loginForm(){
        return view('admin.login');
    }
}
