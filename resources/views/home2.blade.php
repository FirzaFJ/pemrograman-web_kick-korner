@if (auth()->user())
    <h1>Selamat datang di halaman user {{ auth()->user()->name }}</h1>

    <form action="/logout" method="post">
        @csrf
        <button class="dropdown-item">Sign out</button>
    </form>
@else
    <h1>Selamat datang di halaman user</h1>
@endif

