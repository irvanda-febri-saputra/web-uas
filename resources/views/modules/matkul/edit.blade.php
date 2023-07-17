@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit Data Mahasiswa </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('matkul.update', $matkul->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Kode Matakuliah</label>
                                <input value="{{ $matkul->kd_matkul }}" type="text" name="kd_matkul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Matakuliah</label>
                                <input value="{{ $matkul->nama_matkul }}" type="text" name="nama_matkul"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input value="{{ $matkul->sks }}" type="number" name="sks" class="form-control">
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
