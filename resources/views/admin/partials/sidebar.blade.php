{{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('shoes*') ? 'active' : '' }}" href="/shoes">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Shoes</span>
        </a>
      </li>
    </ul>
</nav> --}}


<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span class="ml-2">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                <span class="ml-2">Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('shoes*') ? 'active' : '' }}" href="/shoes">
                <i class="fa-solid fa-shoe-prints"></i>
                <span class="ml-2">Shoes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('transaction*') ? 'active' : '' }}" href="/transaction">
                <i class="fa-duotone fa-money-bill-1-wave"></i>
                <span class="ml-2">Transactions</span>
              </a>
            </li>
          </ul>
    </div>
</nav>
