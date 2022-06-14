<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function showAdminName(){
        return 'Said Ahmed';
    }
    public function showAdminName01(){
        return 'Said Ahmed';
    }

    public function index(){
        return view('admin.welcome');
    }
}
