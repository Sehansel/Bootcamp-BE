<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function create(){
        return view('addKategori');
    }

    public function store(Request $request){
        $request->validate([
            'namaKategori' => 'required|string'
        ]);

        Kategori::create([
            'namaKategori' => $request->namaKategori
        ]);

        return redirect(route('homepage'));
    }

    public function show(){
        $kategori = Kategori::all();

        return view('showKategori')->with('kategori', $kategori);
    }

    public function detail($id){
        $kategori = Kategori::findOrFail($id);

        return view('kategoriDetail')->with('kategori', $kategori);
    }

    public function edit($id){
        $kategori = Kategori::findOrFail($id);

        return view('updateKategori')->with('kategori', $kategori);
    }

    public function update($id, Request $request){
        $request->validate([
            'namaKategori' => 'required|string'
        ]);

        $kategori = Kategori::findOrFail($id)->update([
            'namaKategori' => $request->namaKategori
        ]);

        return redirect(route('showKategori'));
    }
    
    public function delete($id){
        Kategori::destroy($id);

        return redirect(route('showKategori'));
    }
}
