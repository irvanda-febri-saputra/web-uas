@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Dosen </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('dosen.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIDN</label>
                                <input type="text" name="nidn" class="form-control" placeholder="Masukkan Nama Dosen">
                            </div>
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <input type="text" name="nama_dosen" class="form-control"
                                    placeholder="Masukkan Nama Dosen">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control"
                                    placeholder="Masukkan Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('dosen.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
