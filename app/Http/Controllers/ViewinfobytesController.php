<?php

namespace App\Http\Controllers;
use App\Models\Infobytes;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewinfobytesController extends Controller
{
        public function index(){
            $data=Infobytes::get();
            return view('infobytes',compact('data'));
        }
        public function view(string $id)
        {
            // dd($id);
            $data=Infobytes::where('info_id','=',$id)->first();
            // dd($data->file);
            return response()->file(public_path($data->file));

        }
}
