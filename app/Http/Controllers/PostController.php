<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard',['data'=>Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'=>'required|max:255',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'image',
            'isi'=>'required',
        ]);

        if($request->file('gambar')){
            $validasi['gambar'] = $request->file('gambar')->store('gambar-post');
        }
       

        Post::create($validasi);

        return redirect('/dashboard')->with('berhasil', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $dashboard)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $dashboard)
    {
        return view('dashboard.edit',['data'=>$dashboard]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $dashboard)
    {
        $validasi = $request->validate([
            'judul'=>'required|max:255',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'image',
            'isi'=>'required',
        ]);

        if($request->file('gambar')){
            if($dashboard->gambar){
                Storage::delete($dashboard->gambar);
            }
            $validasi['gambar'] = $request->file('gambar')->store('gambar-post');
        }


        Post::where('id', $dashboard->id)->update($validasi);

        return redirect('/dashboard')->with('berhasil', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $dashboard)
    {
        Storage::delete($dashboard->gambar);
        Post::destroy($dashboard->id);

        return redirect('/dashboard')->with('berhasil', 'berhasil menghapus data');
    }
}
