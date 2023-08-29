<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class CartController extends Controller
{
    //
    public function cartList(){
        $list = Barang::get();

        return view('cart', compact('list'));
    }

    public function addCart(Request $request){
        Barang::create([
            'id' => $request->id,
            'namaBarang' => $request->namaBarang,
            'price' => $request->price,
            'stock' => $request->stock,
            'attributes' => array(
                'image' => $request->image
            )
        ]);

        session()->flas('success', 'Procut is Added to Cart Successfully !');

        return redirect(route('homepage'));
    }

    public function updateCart(Request $request){
        Barang::update(
            $request->id,
            [
                'stock' =>[
                    'relative' => false,
                    'value' => $request->stock
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cartList');
    }
}
