@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">

                <h2>Transactions</h2>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Transactions Data
                    </div>
                    <div class="card-body">

                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Customers</th>
                                    <th>Shoes</th>
                                    <th>status</th>
                                    <th>total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $transaction->user->name }}</td>
                                    <td>{{ $transaction->shoes->nama_sepatu }}</td>
                                    @if ($transaction->status == 'send')
                                        <td class="text-danger">{{ $transaction->status }}</td>
                                    @elseif ($transaction->status == 'rate it')
                                        <td class="text-success">{{ $transaction->status }}</td>
                                    @else
                                        <td>{{ $transaction->status }}</td>
                                    @endif
                                    <td>{{ $transaction->gross_amount }}</td>
                                    <td>
                                        @if ($transaction->status == 'pending')
                                            <form action="/transaction/{{ $transaction->id }}/confirm" method="post" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa-sharp fa-regular fa-file-check"></i></button>
                                            </form>
                                        @endif
                                        @if ($transaction->status == 'settlement')
                                            <form action="/transaction/{{ $transaction->id }}/send" method="post" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm" style="background-color: rgb(48, 189, 9); color: white"><i class="fa-regular fa-truck-fast"></i></button>
                                            </form>
                                        @endif
                                        <form action="/transaction/{{ $transaction->id }}" method="post" class="d-inline" id="delete-form-{{ $transaction->id }}">
                                            @csrf
                                           <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); deleteData({{ $transaction->id }});"><i class="fa-solid fa-trash"></i></button>
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

<script>
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
