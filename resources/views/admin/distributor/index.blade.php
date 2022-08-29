@extends('layouts.master')

@section('title')
Distributor
@endsection

@section('sidebartitle')
Distributor
@endsection

@section('content')
<header>
    <h3>Distributor</h3>
    <p class="text-muted">
        Pendistributor Bola basket
    </p>
</header>
<div class="widget-content py-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="align-middle text-right">No</th>
                <th class="align-middle text-center">Nama Distributor</th>
                <th class="align-middle text-center">Alamat</th>
                <th class="align-middle text-center">Tim</th>
                <th class="align-middle text-center col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributors as $distributor)
            <tr>
                <th class="align-middle text-center">{{$loop->iteration}}</th>
                <th class="align-middle text-center">{{$distributor['distributor']}}</th>
                <td class="align-middle text-center">{{$distributor['alamat']}}</td>
                <td class="align-middle text-center">{{$distributor['tim']}}</td>
                <td class="align-middle text-center">
                    {{-- <button type="button" class="btn btn-success">edit</button> --}}
                    <form action="{{ route('distributor.destroy', ['distributor'=>$distributor['id']]) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="float: right;">Hapus</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2{{$distributor['id']}}" style="float: right;">
                        Update
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2{{$distributor['id']}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('distributor.update', ['distributor'=>$distributor['id']]) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <label for="nama_distributor" class="col-sm-2 col-form-label">Nama
                                                Distributor</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$distributor['distributor']}}"
                                                    class="form-control" id="nama_distributor" name="distributor">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$distributor['alamat']}}"
                                                    class="form-control" id="alamat" name="alamat">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tim" class="col-sm-2 col-form-label">Tim</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$distributor['tim']}}" class="form-control"
                                                    id="tim" name="tim">
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
        Tambah
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('distributor.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="nama_distributor" class="col-sm-2 col-form-label">Nama Distributor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_distributor" name="distributor">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tim" class="col-sm-2 col-form-label">Tim</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tim" name="tim">
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