<h1> Selamat datang Halaman Admin {{ auth()->user()->name }}</h1>

<form action="/logout" method="post">
    @csrf
    <button class="dropdown-item">Sign out</button>
</form>
