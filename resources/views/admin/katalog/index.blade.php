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
                <th class="align-middle text-center">Merk</th>
                <th class="align-middle text-center">Spesifikasi</th>
                <th class="align-middle text-center">Harga</th>
                <th class="align-middle text-center col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($katalogs as $katalog)
            <tr>
                <th class="align-middle text-center">{{$loop->iteration}}</th>
                <th class="align-middle text-center">{{$katalog['merk']}}</th>
                <th class="align-middle text-center">{{$katalog['spesifikasi']}}</th>
                <td class="align-middle text-center">{{$katalog['harga']}}</td>
                <td class="align-middle text-center">
                    {{-- <button type="button" class="btn btn-success">edit</button> --}}
                    <form action="{{ route('katalog.destroy', ['katalog'=>$katalog['id']]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2{{$katalog['id']}}" style="float: right;">
                        Update
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2{{$katalog['id']}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('katalog.update', ['katalog'=>$katalog['id']]) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$katalog['merk']}}"
                                                    class="form-control" id="merk" name="merk">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$katalog['spesifikasi']}}"
                                                    class="form-control" id="spesifikasi" name="spesifikasi">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$katalog['harga']}}"
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
                <form action="{{ route('katalog.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="merk">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Spesifikasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" name="spesifikasi">
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