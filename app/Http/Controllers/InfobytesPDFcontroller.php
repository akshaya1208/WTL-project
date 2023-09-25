<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Infobytes;
use Illuminate\Support\Facades\Storage;

class InfobytesPDFcontroller extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file' => 'required|mimes:pdf|max:5048',
            'title'  => 'required',
        ]);
        if ($request->file("file")) {
            $file = $request->file("file");
            $fileName = $request->title . date("m");
            $file->move(public_path('uploads\infobytes_pdf'), $fileName);
            $fileurl = 'uploads/infobytes_pdf/' . $fileName;
        }
        $info = new Infobytes();
        $info->title = $request->title;
        $info->file = $fileurl;
        if ($info->save()) {
            return back()
                ->with('success', 'File has been successfully uploaded.');
        }
    }
    public function show()
    {
        $data = Infobytes::get();
        return view('admin.add-infobytes', compact('data'));
    }
    public function view(string $id)
    {
        $data = Infobytes::where('info_id', '=', $id)->first();
        return response()->file(public_path($data->file));
    }
    public function destroy(string $id){
        DB::delete('delete from infobytes where info_id = ?', [$id]);
        return back();
    }
    public function viewedit(string $id){
        $data = Infobytes::where('info_id', '=', $id)->first();
        return view('admin.edit-infobytes', compact('data'));
    }
    public function edit(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf|max:5048',
            'title'  => 'required',
            'id'=>'required',
        ]);
        if ($request->file("file")) {
            $file = $request->file("file");
            $fileName = $request->title . date("m");
            $file->move(public_path('uploads\infobytes_pdf'), $fileName);
            $fileurl = 'uploads/infobytes_pdf/' . $fileName;
        }
        $info = new Infobytes();
        $id=$request->id;
        $title = $request->title;
        $info->file = $fileurl;
        Infobytes::where('info_id','=',$id)->update([
            'title'=>$title,
            'file'=>$fileurl
        ]);
        return redirect()->route('admin.add-infobytes');
    }
}
