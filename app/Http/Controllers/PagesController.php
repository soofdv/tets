<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PagesController extends Controller
{
    public function frontpage(){
        //data uit een database halen
        //data meegeven aan de view
        //view returnen

        $blogs = Blog::all();
        return view('frontpage', [
            'blogs' => $blogs,
        ]);


//        return view('frontpage');

    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
