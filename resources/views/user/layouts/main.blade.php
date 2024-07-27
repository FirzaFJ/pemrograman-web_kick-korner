<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kick Corner</title>
    <link rel="icon" type="/image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
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
        /* Navbar */

        #logo {
            font-size: 2em;
            color: aliceblue;
            user-select: none;
            image: url("img/logo.png")
        }

        #navbar a {
            font-family:'Lucida Sans';
            position: relative;
            font-size: 1.1em;
            color: black;
            text-decoration: none;
            /* font-weight: ; */
            margin-left: 40px;
        }

        #navbar a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background:  rgb(174, 189, 9);
            border-radius: 5px;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .5s;
        }

        #navbar a:hover::after {
            transform-origin: left;
            transform: scaleX(1);
        }
        /* End */

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
  <body class="pb-3" id="body">

    @include('user.partials.navbar')

    <!-- Heading -->

    <div class="container-fluid mt-3">
        @yield('container')
    </div>

    <!-- End -->

    @include('user.partials.footer')


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll('.shoes-box'), {
        max: 35,
        speed: 1000,
        glare: true,
      });
    </script>


    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textElement = document.querySelector(".bubble-text");
            const text = textElement.textContent;
            textElement.innerHTML = "";
            text.split("").forEach(char => {
                const span = document.createElement("span");
                span.textContent = char;
                span.className = "split-char";
                textElement.appendChild(span);
            });
        });
    </script> --}}
  </body>
</html>
