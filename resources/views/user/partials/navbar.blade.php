    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255)">
        <div class="container">
          <a class="navbar-brand rounded-circle" href="/"><img src="/img/logo.png" width="70px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav fs-5" id="navbar" >
              <a class="nav-link active" aria-current="page" href="/" >Home</a>
              <a class="nav-link" href="/sale">Sale</a>
              @if (auth()->user())
              <a class="nav-link" href="/purchases">Purchases</a>
              @endif
              <a class="nav-link" href="/contactus">Contact us</a>
            </div>

          </div>
          <div class="navbar-nav fs-5">

            @if (Request::is('/') )
                @if (auth()->user())

                    <button type="button" class="btn position-relative me-2" data-bs-toggle="modal" data-bs-target="#cart">
                        <i class="fa-solid fa-cart-shopping fa-sm"></i>
                        <span class="position-absolute top-0 start-100 translate-middle text-danger" style="font-size: 12px; margin-top: 10px; font-weight: bold">
                        {{ $carts->count() }}
                        <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>

                    <div class="dropdown dropsend">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Profile</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item">Sign out</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                @else
                    <a class="nav-link" href="/login">Login</a>
                @endif
            @elseif (Request::is('sale'))
                @if (auth()->user())

                    <button type="button" class="btn position-relative me-2" data-bs-toggle="modal" data-bs-target="#cart">
                        <i class="fa-solid fa-cart-shopping fa-sm"></i>
                        <span class="position-absolute top-0 start-100 translate-middle text-danger" style="font-size: 12px; margin-top: 10px; font-weight: bold">
                        {{ $carts->count() }}
                        <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>

                    <div class="dropdown dropsend">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Profile</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item">Sign out</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                @else
                    <a class="nav-link" href="/login">Login</a>
                @endif
            @else
                @if (auth()->user())

                    <div class="dropdown dropsend">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Profile</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item">Sign out</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                @else
                    <a class="nav-link" href="/login">Login</a>
                @endif
            @endif
          </div>
        </div>
    </nav>



    <!-- End Navbar -->
