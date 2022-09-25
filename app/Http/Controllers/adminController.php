<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function about(){
        return view('admin.about');
    }

    public function category(){
        return view('admin.category');
    }

    public function contact(){
        return view('admin.contact');
    }

    public function search_result(){
        return view('admin.search-result');
    }

    public function single_post(){
        return view('admin.single-post');
    }

}
