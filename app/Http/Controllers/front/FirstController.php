<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showAdminName(){
        return 'Said Ahmed';
    }

    public function index(){
        $data = [
            'name' => 'saeed',
            'age' => '23',
        ];
        return view('admin.welcome')->with('firstName', 'ahmed')->with('data', $data);
    }
}
