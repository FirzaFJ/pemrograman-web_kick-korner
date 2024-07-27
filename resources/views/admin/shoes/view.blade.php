@extends('admin.layouts.main')

@section('container')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <a href="/shoes"><i class="fa-sharp fa-solid fa-arrow-left fa-lg"></i></a>
                <h3 class="text-center">Detail Sepatu</h3>

                <table class="table table-striped">
                    <tr>
                        <td colspan="2" class="text-center">
                            <img src="{{ asset('Storage/'. $shoes->image1) }}" width="240">
                        </td>
                    </tr>
                    <tr>
                        <th>Shoes Name</th><td>{{ $shoes->nama_sepatu }}</td>
                    </tr>
                    <tr>
                        <th>Category</th><td>{{ $shoes->category->name }}</td>
                    </tr>
                    <tr>
                        <th>Size</th><td>{{ $shoes->ukuran }}</td>
                    </tr>
                    <tr>
                        <th>Stock</th><td>{{ $shoes->stok }}</td>
                    </tr>
                    <tr>
                        <th>Price</th><td>IDR {{ $shoes->harga }}</td>
                    </tr>
                    <tr>
                        <th>Description</th><td>{!! $shoes->deskripsi !!}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

@endsection
