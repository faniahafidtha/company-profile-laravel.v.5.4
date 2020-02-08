<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tb_home;
use File;

class TbHomeController extends Controller
{
    public function index()
    {
        $data = tb_home::latest()->paginate(5);
        return view('home/index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $data = tb_home::findOrFail($id);
        return view('home/show', compact('data'));
    }

    public function create()
    {
        return view('home/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'title_banner' => 'required',
        'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'description' => 'required',
        'status' => 'required',
        ]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'banner';
        $file->move($tujuan_upload,$nama_file);

        tb_home::create([
        'title_banner' => $request->title_banner,
        'file' => $nama_file,
        'description' => $request->description,
        'status' => $request->status,
        ]);

        return redirect('tb_home')->with('success', 'File berhasil ditambahkan');
    }



    public function edit($id)
    {
        $data = tb_home::findOrFail($id);
        return view('home/edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = tb_home::findOrFail($id);
        $data->title_banner = $request->input('title_banner'); 

        if (empty($request->file('file'))){
        $data->file = $data->file;
        }
        else{
        //menghapus file lama
        $tb_home = tb_home::where('id',$id)->first();
        File::delete('banner/'.$tb_home->file);
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('banner',$newName);
        $data->file = $newName;
        }
        $data->description = $request->input('description'); 
        $data->status = $request->input('status'); 
        $data->save();
        return redirect('tb_home')->with('alert-success','File berhasil diubah');
    }


    public function destroy($id)
    {
        // hapus file
        $tb_home = tb_home::where('id',$id)->first();
        File::delete('banner'.$tb_home->file);

        // hapus data
        tb_home::where('id',$id)->delete();

        return redirect()->back();
    }  
}
