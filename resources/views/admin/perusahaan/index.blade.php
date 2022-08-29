@extends('layouts.master')

@section('title')
Perusahaan
@endsection

@section('sidebartitle')
Perusahaan
@endsection
@section('content')
<header>
    <h3>Perusahaan</h3>
    <p class="text-muted">
        Perusahaan pembuat bola basket
    </p>
</header>
<div class="widget-content py-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="align-middle text-center">id</th>
                <th class="align-middle text-center">Nama Perusahaan</th>
                <th class="align-middle text-center">Alamat</th>
                <th class="align-middle text-center col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perusahaans as $perusahaan)
            <tr>
                <th class="align-middle text-center">{{$loop->iteration}}</th>
                <th class="align-middle text-center">{{$perusahaan['Nama_Perusahaan']}}</th>
                <td class="align-middle text-center">{{$perusahaan['Alamat']}}</td>
                <td class="align-middle text-center">
                    {{-- <button type="button" class="btn btn-success">edit</button> --}}
                    <form action="{{ route('perusahaan.destroy', ['perusahaan'=>$perusahaan['id']]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="float: right">Hapus</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2{{$perusahaan['id']}}" style="float: right;">
                        Update
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2{{$perusahaan['id']}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('perusahaan.update', ['perusahaan'=>$perusahaan['id']]) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3 row">
                                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama
                                                perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$perusahaan['Nama_Perusahaan']}}"
                                                    class="form-control" id="nama_perusahaan" name="Nama_Perusahaan">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{$perusahaan['Alamat']}}"
                                                    class="form-control" id="alamat" name="Alamat">
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
                <form action="{{ route('perusahaan.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="Nama_Perusahaan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" name="Alamat">
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