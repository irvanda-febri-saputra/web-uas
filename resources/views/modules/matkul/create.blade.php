@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Matakuliah </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('matkul.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode Matakuliah</label>
                                <input type="text" name="kd_matkul" class="form-control"
                                    placeholder="Masukkan kode Matakuliah">
                            </div>
                            <div class="form-group">
                                <label>Nama Matakuliah</label>
                                <input type="text" name="nama_matkul" class="form-control"
                                    placeholder="Masukkan Nama Matakuliah">
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('matkul.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
