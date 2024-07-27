<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\ShoesUserController;
use App\Http\Controllers\TransactionAdminController;
use App\Http\Controllers\TransactionController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Review;
use App\Models\Shoes;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

// Route view Home
Route::get('/', function() {
    if(auth()->user()) {
        $user= Cart::where('id_user', auth()->user()->id)->latest()->get();
    } else {
        $user= Cart::get();
    }
    return view('user.home.index', [
     'shoess' => Shoes::latest()->paginate(6)->withQueryString(),
     'shoeses' => Shoes::all(),
     'reviews' => Review::latest()->paginate(3),
     'categories' => Category::all(),
     'users' => User::where('role', '2')->get(),
     'carts' => $user,
     'transaction' => Transaction::where('status', 'rate it')->orwhere('status', 'send')->get()
    ]);
});

// sale
// Route view sale
Route::get('/sale', [SaleController::class, 'index']);
// route view Detail Sepatu
Route::get('/detailshoes/{shoes:id}', [SaleController::class, 'detail']);

// Route view Purchases
Route::get('/purchases', function() {
    // return $shoes;
    return view('user.purchases.index', [
        'transactions' =>  Transaction::where('id_user', auth()->user()->id)->latest()->get(),
        'reviews' => Review::where('id_sepatu', )->get()
    ]);
});

// Route Contatc us
Route::get('/contactus', function() {
    return view('user.contactus.index');
});



// Middleware Guest
Route::middleware(['guest'])->group(function () {
    // route view login
    Route::get('/login', function () {
        return view('login.index');
    })->name('login');

    // Route proses regiatrasi
    Route::post('/register', [LoginController::class, 'register']);

    // Route proses login
    Route::post('/login', [LoginController::class, 'authenticate']);

});

// middleware Auth
Route::middleware(['auth'])->group(function () {
    // Route proses logout
    Route::post('/logout', [LoginController::class, 'logout']);

    // Admin
    // Route view dashboard admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index', [
            'active' => 'dashboard',
            'customers' => User::where('role', '2')->latest()->get(),
            'category' => Category::latest()->get(),
            'product' => Shoes::latest()->get(),
            'transaction' => Transaction::latest()->get()
        ]);
    });

    // Route view, create, update, delete Category
    Route::resource('category', CategoryController::class);

    // Route view sepatu
    Route::resource('shoes', ShoesController::class);
    // Route detail sepatu dashboard admin
    Route::get('/shoes/{shoes:id}/view', [ShoesController::class, 'view']);
    // Route edit sepatu
    Route::get('/shoes/edit/{shoes:id}', [ShoesController::class, 'edit']);
    // Route update sepatu
    Route::post('/shoes/{shoes:id}/update', [ShoesController::class, 'update']);
    // Route delete sepatu
    Route::post('/shoes/{shoes:id}/delete', [ShoesController::class, 'delete']);

    // Route view Transaction
    Route::get('/transaction', [TransactionAdminController::class, 'index']);
    // Route Konfirmasi Pesanan
    Route::post('/transaction/{transaction:id}/confirm', [TransactionAdminController::class, 'confirm']);
    // Route send Pesanan
    Route::post('/transaction/{transaction:id}/send', [TransactionAdminController::class, 'send']);
    // Route Delete Pesanan
    Route::post('transaction/{transaction:id}', [TransactionAdminController::class, 'delete']);
    // Route Review User
    Route::get('/review/{transaction:id}', [TransactionController::class, 'review']);
    Route::post('/review/{transaction:id}', [TransactionController::class, 'reviewpost']);


    // User
    // Route view update profile
    Route::get('/profile/{user:id}', [ProfileController::class, 'index'])->name('profile');
    // Route proses edit profile
    Route::post('/profile/{user:id}/edit', [ProfileController::class, 'updateProfile']);
    // Route proses Create Cart
    Route::post('/cart', [CartController::class, 'cart']);
    // Route proses delete Cart
    Route::post('/cart/{cart:id}/delete', [CartController::class, 'deleteCart']);

    // Route view deatil transaksi
    Route::get('/transaction/{cart:id}', [TransactionController::class, 'index']);
    // Route proses transaksi
    Route::post('/bayar/{cart:id}', [TransactionController::class, 'store']);

    // Route contact us admin
    Route::get('/contact_us', [ContactUsController::class, 'view']);
});
