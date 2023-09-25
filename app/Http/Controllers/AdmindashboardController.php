<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Infobytes;
use App\Models\Blogs;
use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function index(){

        $datainfo=Infobytes::count();
        $datablog=Blogs::count();
        $data=Blogs::get();
        // dd($datainfo);
        return view('admin.admin-home',compact('datainfo','datablog','data'));
    }
}
