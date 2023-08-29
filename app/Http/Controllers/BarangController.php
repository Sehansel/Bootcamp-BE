<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    //
    public function addBarang(){
        $kategori = Kategori::all();

        return view('addBarang')->with('kategori', $kategori);
    }

    public function storeBarang(Request $request){
        $request->validate([
            'namaBarang' => 'required|string|min:5|max:80',
            'kategoriId' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|file',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->namaBarang.'.'.$extension;
        $request->file('image')->storeAs('/public/kategori/', $filename);

        Barang::create([
            'namaBarang' => $request->namaBarang,
            'kategoriId' =>$request->namaKategori,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $filename
        ]);

        return redirect ('/');
    }

    public function allBarang(){
        $barang = Barang::all();

        return view('welcome')->with('barang', $barang);
    }

    public function barang($id){
        $barang = Barang::findOrFail($id);

        return view('barangDetail')->with('barang', $barang);
    }

    public function editBarang($id){
        $barang = Barang::findOrFail($id);

        return view('updateBarang')->with('barang', $barang);
    }

    public function updateBarang($id, Request $request){
        $request->validate([
            'namaBarang' => 'required|string|min:5|max:80',
            'kategoriId' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|file',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->namaBarang.'.'.$extension;
        $request->file('image')->storeAs('/public/kategori/', $filename);
        
        $barang = Barang::findOrFail($id)->update([
            'kategoriBarang' => $request->kategoriBarang,
            'namaBarang' => $request->namaBarang,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $filename
        ]);

        return redirect(route('homepage'));
    }

    public function deleteBarang($id){
        Barang::destroy($id);

        return redirect(route('homepage'));
    }
}
