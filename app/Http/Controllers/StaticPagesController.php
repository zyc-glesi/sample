<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        //return '主页';
        return view('static_pages/home');
    }
    public function help(){
        return view ('static_pages/help');
        //return '帮助页';
    }
    public function about(){
        return view('static_pages/about');
        //return '关于页';
    }

}
