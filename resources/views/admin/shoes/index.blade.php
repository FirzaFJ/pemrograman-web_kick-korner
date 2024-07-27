@extends('admin.layouts.main')

@section('container')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">

                <h2>Shoes</h2>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Shoe List
                    </div>
                    <div class="card-body">

                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahSepatu">
                            Add Shoe
                        </button>

                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Shoe Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                </tr>
                            </tfoot> --}}
                            <tbody>
                                @foreach ($shoess as $shoes)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $shoes->nama_sepatu }}</td>
                                    <td>{{ $shoes->harga }}</td>
                                    <td>{{ $shoes->stok }}</td>
                                    <td>{{ $shoes->ukuran }}</td>
                                    <td>
                                        <a href="/shoes/{{ $shoes->id }}/view" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i> View</a>
                                        <a href="/shoes/edit/{{ $shoes->id }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        <form action="/shoes/{{ $shoes->id }}/delete" method="post" class="d-inline" id="delete-form-{{ $shoes->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); deleteData({{ $shoes->id }});">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="tambahSepatu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahSepatuLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahSepatuLabel">Add Shoe</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="/shoes" method="post" enctype="multipart/form-data">
                @csrf
                {{-- Nama Sepatu --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('nama_sepatu') is-invalid @enderror" id="nama_sepatu" name="nama_sepatu" value="{{ old('nama_sepatu') }}" placeholder="nama_sepatu" required>
                    <label for="nama_sepatu">Shoe Name</label>
                    @error('nama_sepatu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End --}}

                <div class="row g-3">
                    <div class="col">
                        {{-- Stok --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}" placeholder="stok" required>
                            <label for="stok">Stock</label>
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- End --}}
                    </div>
                    <div class="col">
                        {{-- Ukuran --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" name="ukuran" value="{{ old('ukuran') }}" placeholder="ukuran" required>
                            <label for="ukuran">Size</label>
                            @error('ukuran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- End --}}
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col">
                        {{-- Harga --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" placeholder="harga" required>
                            <label for="harga">Price</label>
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- End --}}
                    </div>
                    <div class="col">
                        {{-- Category --}}
                        <div class="form-floating mb-3">
                            <select class="form-select" id="id_category" name="id_category" aria-label="Floating label select example">
                            @foreach ($categories as $category)
                            @if (old('id_category') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                            </select>
                            <label for="id_category">Category</label>
                        </div>

                        {{-- @foreach ($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_category" id="id_category1" value="{{ $category->id }}">
                            <label class="form-check-label" for="id_category1">
                              {{ $category->name }}
                            </label>
                        </div>
                        @endforeach --}}


                        {{-- End --}}
                    </div>
                </div>

                {{-- Image1 --}}
                <div class="mb-3">
                    <label for="image1" class="form-label">Image 1</label>
                    <img class="img-preview1 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                    <input type="file" class="form-control @error('image1') is-invalid @enderror" id="image1" name="image1" value="{{ old('image1') }}" placeholder="image1" required onchange="previewImage1(event)">
                    @error('image1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End --}}

                {{-- Image2 --}}
                <div class="mb-3">
                    <label for="image2">Image 2</label>
                    <img class="img-preview2 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                    <input type="file" class="form-control @error('image2') is-invalid @enderror" id="image2" name="image2" value="{{ old('image2') }}" placeholder="image2" required onchange="previewImage2(event)">
                    @error('image2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End --}}

                {{-- Image3 --}}
                <div class="mb-3">
                    <label for="image3">Image 3</label>
                    <img class="img-preview3 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                    <input type="file" class="form-control @error('image3') is-invalid @enderror" id="image3" name="image3" value="{{ old('image3') }}" placeholder="image3" required onchange="previewImage3(event)">
                    @error('image3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- End --}}

                {{-- Deskripsi --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>
                {{-- End --}}
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
      </div>
    </div>
</div>

<script>
    function previewImage1() {
      const image = document.querySelector('#image1')
      const imgPreview = document.querySelector('.img-preview1')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    function previewImage2() {
      const image = document.querySelector('#image2')
      const imgPreview = document.querySelector('.img-preview2')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    function previewImage3() {
      const image = document.querySelector('#image3')
      const imgPreview = document.querySelector('.img-preview3')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

    function deleteData(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
@endsection
