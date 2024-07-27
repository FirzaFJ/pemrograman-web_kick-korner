<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        // return $request;
        $validatedData= $request->validate([
            'id_sepatu' => 'required',
            'id_user' => 'required',
            'harga' => 'required',
            'jumlah' => 'required|min:1'
        ]);

        $validatedData['harga'] = $request->harga * $request->jumlah;

        Cart::create($validatedData);

        return redirect('/sale')->with('success', 'Berhasil ditambahkan di keranjang');
    }

    public function deleteCart(Cart $cart)
    {
        // return $cart->cart_id;
        Cart::destroy($cart->id);
        return redirect('/sale')->with('success', 'Keranjang berhasil dihapus');
    }
}
