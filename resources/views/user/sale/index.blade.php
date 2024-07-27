@extends('user.layouts.main')

@section('container')

    <!-- Recommendation -->
    <section id="product1" class="section-p1">
        <div class="container">
            <h2 class="text-center">Featured Products</h2>
            <p class="text-center">Summer Collection New Morder Design</p>

            {{-- Search --}}
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/sale">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}" >
                            <button class="btn btn-secondary w-25" type="submit"><i class="fa-duotone fa-magnifying-glass"></i> Search</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- End --}}

            <!-- Filter Section -->
            <div class="container" style="margin-top: 50px">
                <div class="filter-container">
                    <a href="/sale" class="brand-filter" data-brand="all">All</a>
                    @foreach ($categories as $category)
                    <a href="/sale?category={{ $category->name }}" class="brand-filter" data-brand="all">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="pro-container">
                @foreach ($shoess as $shoes)
                <a href="/detailshoes/{{ $shoes->id }}" class="text-decoration-none">
                <div class="pro" data-brand="nike">
                    <img src="{{ asset('storage/' . $shoes->image1) }}" alt="">
                    <div class="des">
                        <span> {{ $shoes->category->name }} </span>
                        <h5>{{ $shoes->nama_sepatu }}</h5>
                        <h4>IDR {{ $shoes->harga }}</h4>
                    </div>
                    @if (auth()->user())
                        <form action="/cart" method="post">
                            @csrf
                            <input type="hidden" name="id_sepatu" value="{{ $shoes->id }}">
                            @if (auth()->user())
                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                            @endif
                            <input type="hidden" name="harga" value="{{ $shoes->harga}}">
                            <input type="hidden" name="jumlah" value="1">
                            <a >
                                <button class="cart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </a>
                        </form>
                    @else
                        <a href="/login">
                            <a href="/login"><i class="fa-solid fa-cart-shopping cart"></i></a>
                        </a>
                    @endif

                </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Recommendation -->


    <!-- Modal -->
    <div class="modal fade" id="cart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cartLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cartLabel"><i class="fa-solid fa-cart-shopping fa-sm"></i> Cart</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- Cart --}}
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">

                                @foreach ($carts as $cart)
                                    <div class="card rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img
                                                src="{{ asset('storage/' . $cart->shoes->image1) }}"
                                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <p class="lead fw-normal mb-2">{{ $cart->shoes->nama_sepatu }}</p>
                                                <p><span class="text-muted">Size: </span>{{ $cart->shoes->ukuran }}
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('#jumlah_cart').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <form action="/transaction/{{ $cart->id }}" method="get" id="formJumlah_{{ $cart->id }}">
                                                    @csrf
                                                    <input id="jumlah_cart" min="0" width="100px" name="jumlah" value="{{ $cart->jumlah }}" type="number" class="form-control form-control-sm mt-1" />
                                                </form>

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('#jumlah_cart').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h5 class="mb-0">IDR {{ $cart->harga }}</h5>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <form action="/cart/{{ $cart->id }}/delete" method="post">
                                                    @csrf
                                                    <button type="submit" class="text-danger btn"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <div class="text-end">
                                                <input type="button" onclick="submitForm('formJumlah_{{ $cart->id }}')" class="btn btn-success w-25" name="jumlah{{ $cart->id }}" value="Buy">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{-- End --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function submitForm(formId) {
            document.getElementById(formId).submit();
        }
    </script>

@endsection
