@extends('user.layouts.main')

@section('container')


<div class="container" style="padding-top: 100px">
    <div class="row justify-content-center text-center">
        <div class="col-md-6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h1><i class="fa-duotone fa-circle-user fa-2xl my-5"></i></h1>

            <form action="/profile/{{ $user->id }}/edit" method="post">
                @csrf
                {{-- Name --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="name" required>
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- email --}}
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="email" required disabled>
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- No HP --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" placeholder="no_hp" required>
                    <label for="no_hp">Phone number</label>
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div class="form-floating mb-3">
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Floating label select example">
                        @if (old('jenis_kelamin', $user->jenis_kelamin) == '-')
                            <option value="-" selected>-</option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        @elseif (old('jenis_kelamin', $user->jenis_kelamin) == 'M')
                            <option value="-">-</option>
                            <option value="M" selected>M</option>
                            <option value="F">F</option>
                        @elseif (old('jenis_kelamin', $user->jenis_kelamin) == 'F')
                            <option value="-">-</option>
                            <option value="M">M</option>
                            <option value="F" selected>F</option>
                        @else
                            <option value="-">-</option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        @endif
                    </select>
                    <label for="jenis_kelamin">Sex</label>
                </div>
                {{-- End --}}

                {{-- alamat --}}
                <div class="form-floating mb-3">
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Leave a comment here" id="floatingTextarea">{{ $user->alamat }}</textarea>
                    <label for="floatingTextarea">Address</label>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{--  --}}

                {{-- button --}}
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
                {{-- end --}}
            </form>
        </div>
    </div>
</div>


@endsection
