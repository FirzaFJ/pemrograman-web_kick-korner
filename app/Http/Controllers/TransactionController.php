<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Review;
use App\Models\Shoes;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Cart $cart, Request $request)
    {
        $shoess= Shoes::where('id', $cart->id_sepatu)->get();

        $jumlahBeli = $request->jumlah;

        foreach($shoess as $shoes) {
            $harga = $shoes->harga * $jumlahBeli;
        }

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $harga,
            ),
            'item-details' => array(
                'id' => $cart->id,
                'price' => $shoes->harga,
                'quantity' => $jumlahBeli,
                'name' => $shoes->nama_sepatu
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                // 'last_name' => 'pratama',
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_hp,
            ),
        );
        // return $params;

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // return $snapToken;;

        return view('user.transaction.index', [
            'harga' => $harga,
            'shoes' => $shoes,
            'jumlahBeli' => $jumlahBeli,
            'snapToken' => $snapToken,
            'cart' => $cart
        ]);
    }

    public function store(Cart $cart, Request $request)
    {
        // $validatedData2['stok'] =$cart->shoes->stok - $cart->jumlah;
        // return $validatedData2;
        $json= json_decode($request->get('json'));
        // return $json;

        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['id_sepatu'] = $cart->id_sepatu;
        $validatedData['status'] = $json->transaction_status;
        $validatedData['order_id'] = $json->order_id;
        $validatedData['gross_amount'] = $json->gross_amount;
        $validatedData['pdf_url'] = $json->pdf_url ?? null;
        // return $validatedData;

        Transaction::create($validatedData);

        $validatedData2['stok'] =$cart->shoes->stok - $cart->jumlah;

        Shoes::where('id', $cart->shoes->id)->update($validatedData2);

        $cart->delete();

        return redirect('/purchases')->with('success', 'Your order has been created');
    }

    public function review(Transaction $transaction)
    {
        // return $transaction;
        return view('user.purchases.review', [
            'transaction' => $transaction,
            'shoess' => Shoes::where('id', $transaction->id_sepatu)->get()
        ]);
    }

    public function reviewpost(Request $request, Transaction $transaction)
    {
        // return $request;
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_transaction' => 'required',
            'id_sepatu' => 'required',
            'ulasan' => 'nullable',
            'bintang' => 'required',
            'image' => 'nullable'
        ]);

        $validatedData['ulasan'] = $request->ulasan;
        $validatedData['bintang'] = $request->bintang;

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('review-products');
        }

        // return $validatedData;
        Review::create($validatedData);

        $validatedData2['status'] = 'rate it';

        Transaction::where('id', $transaction->id)->update($validatedData2);

        return redirect('/purchases')->with('success', 'Successfully reviewed the product');

    }
}
