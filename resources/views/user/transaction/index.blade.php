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

    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-vt2oWw8sowF1s2RK"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
    </style>
  </head>
  <body class="pb-3" id="body" style="background-color: #f8f8f8">


    <div class="container-fluid mt-3">
        <!--Product detail-->
        <section class="container sproduct pb-3">
            <a href="/sale"><i class="fa-sharp fa-solid fa-arrow-left fa-lg"></i></a>

            <h3 class="py-3">Checkout</h3>
            <div class="row d-flex justify-content-center mt-3">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-sm-8 mb-3 mb-sm-0">
                          <div class="card shadow-lg">
                            <div class="card-body">
                              <h5 class="card-title text-muted">Shipping Address</h5>
                              <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i> {{ auth()->user()->alamat }}</p>
                              <a href="/profile/{{ auth()->user()->id }}" class="btn btn-outline-secondary">Change Address</a>
                            </div>
                          </div>

                          <div class="card mt-3 shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title"><img src="/img/logo.png" alt="" width="25px" height="25px" class="me-2 rounded-circle mb-1"> Kick Korner</h5>
                                <div class="card rounded-3 mb-4">
                                    <div class="card-body p-4">
                                      <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                          <img
                                            src="{{ asset('storage/' . $shoes->image1) }}"
                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                          <p class="lead fw-normal mb-2">{{ $shoes->nama_sepatu }}</p>
                                          <p><span class="text-muted">Size: </span>{{ $shoes->ukuran }}</p>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-4 offset-lg-1 text-end">
                                          <h5 class="mb-0">{{ $jumlahBeli }} x IDR {{ $shoes->harga }}</h5>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card shadow-lg">
                            <div class="card-body">
                              <h5 class="card-title">Total</h5>
                              <p class="card-text">IDR {{ $harga }}</p>
                              <button id="pay-button" class="btn btn-success w-100">Pay!</button>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Product detail-->
    </div>

    <form action="/bayar/{{ $cart->id }}" id="form_submit" method="post">
        @csrf
        <input type="hidden" name="json" id="json_callback">
        <input type="hidden" name="jumlah" value="{{ $cart->jumlah }}">
    </form>
    <!-- End -->

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                /* You may add your own implementation here */
                console.log(result);
                send_response_to_form(result);
            },
            onPending: function(result){
                /* You may add your own implementation here */
                console.log(result);
                send_response_to_form(result);
            },
            onError: function(result){
                /* You may add your own implementation here */
                console.log(result);
                send_response_to_form(result);
            },
            onClose: function(){
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
            })
        });

        function send_response_to_form(result){
            document.getElementById('json_callback').value = JSON.stringify(result);
            document.getElementById('form_submit').submit();
        }
      </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
