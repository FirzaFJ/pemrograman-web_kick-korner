@extends('user.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6" style="padding-top: 115px;">
                <div class="">
                    <div class="title fw-bold bubble-text">
                        <p style="font-family:'Lucida Grande'">Summer <br>
                            Collections
                            <div style="color: rgb(203, 26, 6); border: solid 0px; width: 250px; text-align: center; font-family: 'Lucida Sans'">2024</div>
                        </p>
                    </div>

                    <a href="/sale" class="btn w-25 text-white" style="background-color: rgb(203, 26, 6);font-family:'Lucida Sans';">Buy Now</a>

                    <div class="row ms-2">
                        @if ($shoess->count())
                            <div class="card my-3" style="max-width: 300px;">
                                <a href="/detailshoes/{{ $shoess[0]->id }}" class="text-decoration-none text-black">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $shoess[0]->image1) }}" class="img-fluid rounded-start mt-1" alt="...">
                                        </div>
                                        <div class="col-md-8" >
                                            <div class="card-body" style="font-family: Lucida Sans">
                                            <h5 class="card-title">{{ $shoess[0]->nama_sepatu }}</h5>
                                            <p class="card-text">{{ $shoess[0]->category->name }}</p>
                                            <p class="card-text"><small class="text-body-secondary">Last updated {{ $shoess[0]->created_at->diffForHumans() }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card my-3 ms-2 me-3" style="max-width: 300px;">
                                <a href="/detailshoes/{{ $shoess[1]->id }}" class="text-decoration-none text-black">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $shoess[1]->image1) }}" class="img-fluid rounded-start mt-1" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">{{ $shoess[1]->nama_sepatu }}</h5>
                                            <p class="card-text">{{ $shoess[1]->category->name }}</p>
                                            <p class="card-text"><small class="text-body-secondary">Last updated {{ $shoess[1]->created_at->diffForHumans() }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-6 rounded-3xl"  style="padding-top: 100px;">
                <a href="#">
                    <div class="card bg-dark text-white ">
                        <img src="img/promo.png" class="card-img" alt="">
                    </div>
                </a>
            </div>

            <div class="col-md-12 my-5">
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center" style="border-right: solid black">
                            <h3 style="color:rgb(203, 26, 6)">{{ $transaction->count() }} </h3>
                            <p class="mt-1 ms-2">Orders Complete</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center" style="border-right: solid black">
                            <h3 style="color:rgb(203, 26, 6)">{{ $shoeses->count() }} </h3>
                            <p class="mt-1 ms-2">All  Product</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3 style="color:rgb(203, 26, 6)">{{ $users->count() }} </h3>
                            <p class="mt-1 ms-2">Customers</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Heading -->

    <!-- What we Offer -->
    <div class="mt-3" style="background-color: rgb(237, 237, 237);">
        <div class="container">
            <div class="row justify-content-center">
                <p class="my-3 text-center  fw-bold" style="font-size: 40px">What We <span style="color: red;">Offer</span></p>
                <div class="col-md-2 mb-4">
                <div class="card whatweoffer">
                    <img src="img/quality.png" class="card-img-top rounded-circle px-5 py-3" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title mt-1" style="color: rgb(174, 189, 9);">Quality</h5>
                    <p class="card-text mt-4 whatweoffertext">guarantee all goods are of the best quality</p>
                    </div>
                </div>
                </div>

                <div class="col-md-2 mb-4">
                <div class="card whatweoffer">
                    <img src="img/harga.png" class="card-img-top rounded-circle px-5 py-3" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title" style="color: rgb(174, 189, 9);">Affordable Prices</h5>
                    <p class="card-text whatweoffertext" >
                        We sell at affordable prices compared to other stores</p>
                    </div>
                </div>
                </div>

                <div class="col-md-2 mb-4">
                <div class="card whatweoffer">
                    <img src="img/layanan.png" class="card-img-top rounded-circle px-5 py-3" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title mt-1" style="color: rgb(174, 189, 9);">24 hour service</h5>
                    <p class="card-text mt-4 whatweoffertext">We provide 24 hour service to provide the best service</p>
                    </div>
                </div>
                </div>

                <div class="col-md-2 mb-4">
                <div class="card whatweoffer">
                    <img src="img/diskon.png" class="card-img-top rounded-circle px-5 py-3" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title mt-1" style="color: rgb(174, 189, 9);">Discount</h5>
                    <p class="card-text mt-4 whatweoffertext">We offer various very high discounts at every event</p>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End What we Offer -->

    <!-- Our Collection -->
    <br>
    <div class="mt-5">
        <div class="container">
            <div class="row justify-content-around">
            <p class="my-4 text-center  fw-bold" style="font-size: 40px">Our <span style="color: red;">Collection</span></p>

            <div class="container">
                <div class="row">
                    @foreach ($shoess->skip(2) as $shoes)
                        <div class="col-md-4 mb-3">
                            <a href="/detailshoes/{{ $shoes->id }}" class="text-decoration-none">
                            <div class="card">
                            <div class="shoes-box">
                                <h4 class="shoes-name">{{ $shoes->nama_sepatu }}</h4>
                                <img src="{{ asset('storage/' . $shoes->image1) }}" alt="Keychron K3" class="shoes-img" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color: rgb(174, 189, 9);">{{ $shoes->nama_sepatu }}</h5>
                                <p class="card-text">{{ $shoes->category->name }}</p>
                                <span>IDR {{ $shoes->harga }}</span>
                            </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-end">
                    {{ $shoess->links() }}
                </div>
            </div>
      </div>
    <!-- End Our Collection -->

    <!-- Clients Say -->
    <div class="mt-3">
        <div class="container">
            <div class="row">
            <p class="my-5 text-center fs-2 fw-bold">What Our <span style="color: red;">Clients Say</span> <br> About Us </p>

            @foreach ($reviews as $review)
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-duotone fa-circle-user fa-xl"></i> {{ $review->user->name }}</h5>
                            <div class="bintang mt-3">

                                @if ($review->bintang == 5)
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                @elseif ($review->bintang == 4)
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                @elseif ($review->bintang == 3)
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                @elseif ($review->bintang == 2)
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                @else
                                    <i class="fa-sharp fa-solid fa-star" style="color: #FFD43B;"></i>
                                @endif

                                <div class="d-inline ms-3">
                                    {{ $review->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <p class="card-text mt-2">{{ $review->ulasan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-end">
                {{ $reviews->links() }}
            </div>

            </div>
        </div>
    </div>
    {{-- End Clients Say  --}}

    {{-- News Laters --}}
    <div class="row mt-5">
        <div class="col-md-12 pt-3">
            <div class="card bg-dark text-white">
                <img src="img/backsepatu.jpeg" class="card-img" style="max-height: 300px;" alt="">
                <div class="card-img-overlay d-flex align-items-center p-0">
                <div class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">
                    <h5 class="fs-3">Join Our <span style="color: red;">News Laters</span></h5>
                    <center>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde ratione nesciunt, facere temporibus sapiente molestias, nisi minus ullam enim voluptates cumque sit officiis! Vitae.</p>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search.." name="search">
                        <button class="btn btn-danger w-25 " type="submit"><i class="fa-duotone fa-magnifying-glass"></i> Search</button>
                    </div>
                    </center>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End News Laters -->

    <!--  -->
    <div class="container my-5">
        <div class="col-md-12">

            <div class="row justify-content-center">
            <div class="col-sm-3 my-3 mb-sm-0">
                <div class="treanding-search">
                <div class="card-body">
                    <h5 class="card-title">Store Location</h5>
                    <span class="card-text">Find Us:</span>
                    <div>
                    <a href="#"><i class="fa-brands fa-instagram fa-xl me-2"></i></a>
                    <a href="#"><i class="fa-duotone fa-map-location-dot fa-xl me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-sm-3 my-3 mb-sm-0">
                <div class="treanding-search">
                <div class="card-body">
                    <h5 class="card-title">Trending Search</h5>
                    <div>Sepatu Converse</div>
                    <div>Sepatu Sneaker</div>
                    <div>Sepatu Sneakers Wanita</div>
                    <div>Sepatu Sneakers Pria</div>
                    <div>Sepatu One Star</div>
                    <div>Sepatu All Star</div>
                    <div>Sepatu Run Star Hike</div>
                </div>
                </div>
            </div>

            <div class="col-sm-3 my-3 mb-sm-0">
                <div class="treanding-search">
                <div class="card-body">
                    <h5 class="card-title">Customer service</h5>
                    <div>Contact us</div>
                    <div>Order Status</div>
                    <div>FAQs</div>
                    <div>Size Guide</div>
                    <div>Size Guide</div>
                    <div>Return</div>
                    <div>Sitemap</div>
                </div>
                </div>
            </div>

            <div class="col-sm-3 my-3 mb-sm-0">
                <div class="treanding-search">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <div>About Converse</div>
                    <div>About MAPCLUB</div>
                    <div>Terms and Conditions</div>
                    <div>Privacy Policy</div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>


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
                                                {{-- <input type="button" onclick="submit(formJumlah_{{ $cart->id }})" class="btn btn-success w-25" name="jumlah{{ $cart->id }}" value="Buy"> --}}
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
