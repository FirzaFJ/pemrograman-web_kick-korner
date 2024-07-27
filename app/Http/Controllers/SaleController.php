<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Review;
use App\Models\Shoes;
use App\Models\Transaction;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        if(auth()->user()) {
            $user= Cart::where('id_user', auth()->user()->id)->latest()->get();
        } else {
            $user= Cart::get();
        }

        return view('user.sale.index', [
            'shoess' => Shoes::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all(),
            // 'user' => $user,
            'carts' => $user
        ]);
    }

    public function detail(Shoes $shoes)
    {
        $coba= $shoes->harga ;
        $recomendeds = Shoes::where('harga', '>', $shoes->harga - 50000)->where('harga', '<', $shoes->harga + 50000)->latest()->get();
        // return $recomendeds;
        return view('user.sale.detail', [
            'shoes' => $shoes,
            'recomendeds' => Shoes::where('harga', '>=', $shoes->harga - 50000)->where('harga', '<=', $shoes->harga + 50000)->where('id', '!=', $shoes->id)->latest()->get(),
            'reviews' => Review::where('id_sepatu', $shoes->id)->get()
        ]);
    }
}
