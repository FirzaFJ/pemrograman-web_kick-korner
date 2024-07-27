@extends('admin.layouts.main')

@section('container')

    <h3>Dashboard</h3>
    <p>Welcome {{ auth()->user()->name }} to the admin page</p>
    <div class="row my-4">
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header">Customers</h5>
                <div class="card-body">
                    <h1 class="card-title text-center">{{ $customers->count() }}</h1>
                    @if ($customers->count())
                        <p class="card-text text-center">Last Update {{ $customers[0]->created_at->diffForHumans() }}</p>
                    @endif
                </div>
              </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Category</h5>
                <div class="card-body">
                    <h1 class="card-title text-center">{{ $category->count() }} </h1>
                    @if ($category->count())
                        <p class="card-text text-center">Last Update {{ $category[0]->created_at->diffForHumans() }}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Products</h5>
                <div class="card-body">
                    <h1 class="card-title text-center">{{ $product->count() }}</h1>
                    @if ($product->count())
                        <p class="card-text text-center">Last Update {{ $product[0]->created_at->diffForHumans() }}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Transaction</h5>
                <div class="card-body">
                    <h1 class="card-title text-center">{{ $transaction->count() }}</h1>
                    @if ($transaction->count())
                        <p class="card-text text-center">Last Update {{ $transaction[0]->created_at->diffForHumans() }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
