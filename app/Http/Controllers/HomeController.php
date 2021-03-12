<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = session()->getId();
        $blogs = Blog::where('author_id', $id)->FindOrFail();
        return view('users.index', [
            'blogs' => $blogs,
        ]);

//        return view('users.index');
    }
}
