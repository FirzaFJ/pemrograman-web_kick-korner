<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kick Corner</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
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

        /* Star */
        .star-rating {
            direction: rtl;
            display: inline-flex;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            font-size: 2rem;
            color: #c7c7c7;
            cursor: pointer;
            padding: 0 0.1rem;
        }
        .star-rating input[type="radio"]:checked ~ label i {
            color: #FFD700;
        }
        .star-rating input[type="radio"]:checked ~ label ~ label i {
            color: #FFD700;
        }
        .star-rating label:hover i,
        .star-rating label:hover ~ label i {
            color: #FFD700;
        }
    </style>
  </head>
  <body class="pb-3" id="body">


    <div class="container-fluid mt-3">

        <!--Review-->
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <section class="container sproduct pb-3">
                    <a href="/purchases"><i class="fa-sharp fa-solid fa-arrow-left fa-lg"></i></a>
                        <div class="row mt-2">

                            <h3 class="text-center mb-3">Review <span style="color: red">Product</span></h3>
                            <hr>
                            @foreach ($shoess as $shoes)
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card rounded-3 my-4">
                                            <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                <img
                                                    src="{{ asset('storage/' . $shoes->image1) }}"
                                                    class="img-fluid rounded-3" style="max-height: 150px">
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-xl-4">
                                                <p class="lead fw-normal mb-2">{{ $shoes->nama_sepatu }}</p>
                                                <p><span class="text-muted">Size: {{ $shoes->ukuran }}</span></p>
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-xl-2 d-flex">

                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <form action="/review/{{ $transaction->id }}" method="post" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="">
                                                            <div class="star-rating">
                                                                <input type="radio" id="star5" name="bintang" value="5"><label for="star5" title="5 stars"><i class="fa-solid fa-star"></i></label>
                                                                <input type="radio" id="star4" name="bintang" value="4"><label for="star4" title="4 stars"><i class="fa-solid fa-star"></i></label>
                                                                <input type="radio" id="star3" name="bintang" value="3"><label for="star3" title="3 stars"><i class="fa-solid fa-star"></i></label>
                                                                <input type="radio" id="star2" name="bintang" value="2"><label for="star2" title="2 stars"><i class="fa-solid fa-star"></i></label>
                                                                <input type="radio" id="star1" name="bintang" value="1"><label for="star1" title="1 star"><i class="fa-solid fa-star"></i></label>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </section>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">

                            <div class="mb-3">
                                <label for="image" class="form-label d-block">Foto Product</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}" placeholder="image" onchange="previewImage(event)">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ auth()->user()->name }}" disabled>
                                <label for="name">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" name="ulasan" id="ulasan"></textarea>
                                <label for="ulasan">Comments</label>
                            </div>
                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="id_transaction" value="{{ $transaction->id }}">
                            <input type="hidden" name="id_sepatu" value="{{ $transaction->id_sepatu }}">

                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-success w-25">Ulas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Review-->
    </div>

    <!-- End -->

    @include('user.partials.footer')


    <script>
        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
