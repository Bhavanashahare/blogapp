<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;
class FrontController extends Controller
{
    public function index(){
        $data=Make::all();
return view('welcome',compact('data'));
    }


}
