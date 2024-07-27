@extends('admin.layouts.main')

@section('container')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <h3>Edit</h3>

                <form action="/shoes/{{ $shoes->id }}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Nama Sepatu --}}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_sepatu') is-invalid @enderror" id="nama_sepatu" name="nama_sepatu" value="{{ old('nama_sepatu', $shoes->nama_sepatu) }}" placeholder="nama_sepatu" required>
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
                                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $shoes->stok) }}" placeholder="stok" required>
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
                                <input type="number" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" name="ukuran" value="{{ old('ukuran', $shoes->ukuran) }}" placeholder="ukuran" required>
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
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $shoes->harga) }}" placeholder="harga" required>
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
                                    @if (old('id_category', $shoes->id_category) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                                </select>
                                <label for="id_category">Category</label>
                            </div>
                            {{-- End --}}
                        </div>
                    </div>

                    {{-- Image1 --}}
                    <div class="mb-3">
                        <label for="image1" class="form-label d-block">Image 1</label>
                        <input type="hidden" name="oldImage1" value="{{ $shoes->image1 }}">
                        @if ($shoes->image1)
                            <img src="{{ asset('storage/' . $shoes->image1) }}" class="img-preview1 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @else
                            <img class="img-preview1 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @endif
                        <input type="file" class="form-control @error('image1') is-invalid @enderror" id="image1" name="image1" value="{{ old('image1') }}" placeholder="image1" onchange="previewImage1(event)">
                        @error('image1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- End --}}

                    {{-- Image2 --}}
                    <div class="mb-3">
                        <label for="image2" class="form-label d-block">Image 2</label>
                        <input type="hidden" name="oldImage2" value="{{ $shoes->image2 }}">
                        @if ($shoes->image2)
                            <img src="{{ asset('storage/' . $shoes->image2) }}" class="img-preview2 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @else
                            <img class="img-preview2 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @endif
                        <input type="file" class="form-control @error('image2') is-invalid @enderror" id="image2" name="image2" value="{{ old('image2') }}" placeholder="image2" onchange="previewImage2(event)">
                        @error('image2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- End --}}

                    {{-- Image3 --}}
                    <div class="mb-3">
                        <label for="image3" class="form-label d-block">Image 3</label>
                        <input type="hidden" name="oldImage3" value="{{ $shoes->image3 }}">
                        @if ($shoes->image3)
                            <img src="{{ asset('storage/' . $shoes->image3) }}" class="img-preview3 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @else
                            <img class="img-preview3 img-fluid mb-3 col-sm-5" style="max-height: 200; max-width: 200px;">
                        @endif
                        <input type="file" class="form-control @error('image3') is-invalid @enderror" id="image3" name="image3" value="{{ old('image3') }}" placeholder="image3" onchange="previewImage3(event)">
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
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $shoes->deskripsi) }}">
                        <trix-editor input="deskripsi"></trix-editor>
                    </div>
                    {{-- End --}}

                    <button type="submit" class="btn btn-warning">Edit</button>
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
</script>

@endsection
