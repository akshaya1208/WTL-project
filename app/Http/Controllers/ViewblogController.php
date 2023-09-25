<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class ViewblogController extends Controller
{
    public function index(){
        $data=Blogs::get();
        // dd($data);
        return view('activities',compact('data'));
    }
}
