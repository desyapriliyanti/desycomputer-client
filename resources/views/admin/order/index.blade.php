@extends('layouts.master')

@section('title')
Desy Computer
@endsection

@section('sidebartitle')
Desy Computer
@endsection
@section('content')
<header>
    <h3>Desy Computer</h3>
    <p class="text-muted">
        Jual Laptop & Computer
    </p>
</header>
<div class="widget-content py-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="align-middle text-center">ID</th>
                <th class="align-middle text-center">Nama</th>
                <th class="align-middle text-center">No HP</th>
                <th class="align-middle text-center">Alamat</th>
                <th class="align-middle text-center">Merk</th>
                <th class="align-middle text-center">Harga</th>
                <th class="align-middle text-center col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th class="align-middle text-center">{{$loop->iteration}}</th>
                <th class="align-middle text-center">{{$order['nama']}}</th>
                <th class="align-middle text-center">{{$order['nohp']}}</th>
                <th class="align-middle text-center">{{$order['alamat']}}</th>
                <th class="align-middle text-center">{{$order['merk']}}</th>
                <td class="align-middle text-center">{{$order['harga']}}</td>
                <td class="align-middle text-center">
                    {{-- <button type="button" class="btn btn-success">edit</button> --}}
                    <form action="{{ route('order.destroy', ['order'=>$order['id']]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2{{$order['id']}}" style="float: right;">
                        Update
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2{{$order['id']}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('order.update', ['order'=>$order['id']]) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$order['nama']}}"
                                                    class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$order['nohp']}}"
                                                    class="form-control" id="nohp" name="nohp">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$order['alamat']}}"
                                                    class="form-control" id="alamat" name="alamat">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$order['merk']}}"
                                                    class="form-control" id="merk" name="merk">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$order['harga']}}"
                                                    class="form-control" id="harga" name="harga">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        style="float: right;">
        Create
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">No HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="nohp">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" name="alamat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="merk">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection