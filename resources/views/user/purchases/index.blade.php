@extends('user.layouts.main')

@section('container')


<div class="my-5">
    <div class="container">
      <div class="row justify-content-around">

        <p class="mt-5 text-center fs-2 fw-bold">Your <span style="color: red;">Order</span></p>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <hr>

        <div class="col-md-3 text-center">
            <span><i class="fa-solid fa-credit-card fa-xl"></i></span><br>
            <span>Not Yet Paid</span>
        </div>

        <div class="col-md-3 text-center">
            <span><i class="fa-light fa-box-taped fa-xl"></i></span><br>
            <span>Packed</span>
        </div>

        <div class="col-md-3 text-center">
            <span><i class="fa-regular fa-truck fa-xl"></i></span><br>
            <span>Send</span>
        </div>

        <div class="col-md-3 text-center">
            <span><i class="fa-regular fa-circle-star fa-xl"></i></span><br>
            <span>Rate It</span>
        </div>

        {{-- not yet paid --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'pending')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Pending</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Packed --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'settlement')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Packed</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Send --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'send')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Send</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="/review/{{ $transaction->id }}" class="btn btn-primary">Konfirmasi Pesanan</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- End --}}

        {{-- Rate it --}}
        <div class="col-sm-3 my-5 mb-sm-0">
            <div class="card">
                @foreach ($transactions as $transaction)
                    @if ($transaction->status == 'rate it')
                        <div class="card-body">
                            <div class="card" style="max-width: 540px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $transaction->shoes->image1) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $transaction->shoes->nama_sepatu }}</h5>
                                    <span class="card-text">Rate it</span>
                                    <span class="d-block">IDR {{ $transaction->gross_amount }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- end --}}

      </div>
    </div>
</div>



@endsection
