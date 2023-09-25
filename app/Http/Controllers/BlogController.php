<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Blogs;
class BlogController extends Controller
{
    public function index(){
        $data=Blogs::get();
        return view('admin.add-blog',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'date'  => 'required',
            'content'=>'required',
        ]);
        // dd($request->all());
        $bl=new Blogs();
        $bl->date=$request->date;
        $bl->content=$request->content;
        $bl->save();
        return back();
    }
    public function view(string $id){
        $data=Blogs::where('blog_id','=',$id)->first();
        return view('admin.admin-view-content',compact('data'));
    }
    public function destroy(string $id){
        DB::delete('delete from blogs where blog_id = ?', [$id]);
        return back();
    }
    public function viewedit(string $id){
        $data=Blogs::where('blog_id','=',$id)->first();
        return view('admin.edit-blog',compact('data'));
    }
    public function edit(Request $request){
        
    }
}
