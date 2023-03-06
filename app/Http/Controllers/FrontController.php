<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;
use App\Models\Blog;

class FrontController extends Controller
{
    //     public function index(){
    //         $data=Make::all();
    // return view('welcome',compact('data'));
    //     }


    public function index()
    {
        $data = Make::all();
        $blogs = Blog::all();
        $latest_blog = Blog::latest()->first();
        return view('welcome', compact('data', 'blogs', 'latest_blog'));
    }

    public function detail($id)
    {
        $blogs = Blog::with('category')->find($id);
        $data = Make::all();
        return view('details', compact('blogs', 'data'));
    }


    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function master()
    {
        return view('layouts.master');
    }

    // public function view($id)
    // {
    //   $category=Make::find($id);
    //   $data = Make::paginate(3);
    //   $blogs = Blog::where('category_id',$id)->get();
    //   $latest_blog = Blog::latest()->first();
    //   return view('welcome', compact('data', 'blogs', 'latest_blog'));
    // }

    public function view($id)
    {

        $data = Make::all();
        $blogs = Blog::where('category_id',$id)->get();
        // $latest_blog = Blog::latest()->first();
        // return view('welcome', compact('data', 'blogs', 'latest_blog'));
        return view ('dashboard',compact('data','blogs'));
    }

}

// public function detail(){
    //     $data=Blog::all();
