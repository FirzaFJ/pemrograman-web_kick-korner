<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kick Corner</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"> --}}
    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-d53d10572a0e0d37cb8d614a3f177a0c.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css"
      >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <style>
        .sproduct select {
            display: block;
            padding: 5px 10px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background: #fb77fb;
            opacity: 1;
            transition: 0.3s all;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .buy-btn:hover {
            background: #ff4cff;
        }

        .footer {
            border-top: 2px solid;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 50px;
            background-image: url(img/pixel_weave.png);
            color: black;
            text-align: center;
        }

        #product2 {
            text-align: center;
        }

        #product2 .pro-container {
            display: flex;
            justify-content: left;
            padding-top: 20px;
            flex-wrap: wrap;
        }

        #product2 .pro {
            width: 23%;
            min-width: 250px;
            padding: 10px 12px;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px 10px;
            transition: 0.02s ease;
            position: relative;
        }

        #product2 .pro:hover {
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
            transform: translateY(-10px);
        }

        #product2 .pro img {
            width: 100%;
            border-radius: 20px;
        }

        #product2 .pro .des {
            text-align: start;
            padding: 10px 0;
        }

        #product2 .pro .des span {
            color: #606063;
            font-size: 12px;
        }

        #product2 .pro .des h5 {
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        #product2 .pro .des i {
            font-size: 12px;
            color: rgb(243, 181, 25);
        }

        #product2 .pro .des h4 {
            padding-top: 7px;
            font-size: 15px;
            font-weight: 700;
            color: #088178;
        }

        #product2 .pro .cart {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #e8f6ea;
            color: #088178;
            border: 1px solid #cce7d0;
            position: absolute;
            bottom: 20px;
            right: 10px;
        }
    </style>
  </head>
  <body class="pb-3" id="body">


    <div class="container-fluid mt-3">

        <!--Product detail-->
        <section class="container sproduct pb-3">
            <a href="/sale"><i class="fa-sharp fa-solid fa-arrow-left fa-lg"></i></a>
            <div class="row mt-2">
                <div class="col-lg-5 col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="background-color: rgb(218, 217, 217)">
                        <div class="carousel-item active">
                        <img src="{{ asset('storage/' . $shoes->image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('storage/' . $shoes->image2) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('storage/' . $shoes->image3) }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <h3 class="py-4">{{ $shoes->nama_sepatu }}</h3>
                    <h2>IDR {{ $shoes->harga }}</h2>\
                    <p>Size: {{ $shoes->ukuran }} <span class="ms-3">Stock: {{ $shoes->stok }}</span></p>

                    @if (auth()->user())
                        <form action="/cart" method="post">
                            @csrf
                            <input type="hidden" name="id_sepatu" value="{{ $shoes->id }}">
                            @if (auth()->user())
                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                            @endif
                            <input type="hidden" name="harga" value="{{ $shoes->harga}}">
                            <input type="number" name="jumlah" value="1">
                            <button class="buy-btn">Add To Cart</button>
                        </form>
                    @else
                        <input type="hidden" name="harga" value="{{ $shoes->harga}}">
                        <input type="number" name="jumlah" value="1">
                        <a href="/login">
                            <button class="buy-btn">Add To Cart</button>
                        </a>
                    @endif


                    <h4 class="mt-5 mb-3">Product Details</h4>
                    <span>{!! $shoes->deskripsi !!}</span>
                    <hr class="my-4">
                    <h4>Shipping & Payment</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Shipping</h5>
                            <p>1 - 2 Days (Yogyakarta), 3 - 5 Days (Outside Yogyakarta)</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Payment</h5>
                            <p>COD, ShopeePay, Gopay, Dana, OVO, BRI, Mandiri, BCA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product detail-->

        {{-- Review Product --}}
        @if ($reviews->count())
        <section class="container">
            <div class="row" style="margin-top: 50px; margin-bottom: 50px">
                <div class="col-md-6 border">
                    <h5 class="pt-3">Customer Reviews</h5>

                    @foreach ($reviews as $review)
                        <div class="col-sm-12 mb-3 mb-sm-0 py-3">
                            <div class="card">
                            <div class="card-body">
                                <div class="bintang mb-3">

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
                                <h5 class="card-title"><i class="fa-duotone fa-circle-user fa-xl"></i> {{ $review->user->name }}</h5>
                                <p class="card-text mt-4">{{ $review->ulasan }}</p>
                                @if ($review->image)
                                    <img src="{{ asset('storage/' . $review->image) }}" width="150px" class="rounded" alt="">
                                @endif
                            </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        @endif
        {{-- End --}}

        <!-- Recommended Products -->
        @if ($recomendeds->count())
        <section id="product2" class="section-p1 mt-5">
            <div class="container">
                <h2 class="text-center">Recommended Products</h2>
                <p class="text-center">Best Deals and Offers</p>
                <div class="pro-container">
                    @foreach ($recomendeds as $recomended)
                        <div class="pro" data-brand="adidas">
                            <img src="{{ asset('storage/' . $recomended->image2) }}" alt="">
                            <div class="des">
                                <span>{{ $recomended->category->name }}</span>
                                <h5>{{ $recomended->nama_sepatu }}</h5>
                                <h4>IDR {{ $recomended->harga }}</h4>
                            </div>
                            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        <!-- End Recommended Products -->
    </div>

    <!-- End -->

    @include('user.partials.footer')


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
