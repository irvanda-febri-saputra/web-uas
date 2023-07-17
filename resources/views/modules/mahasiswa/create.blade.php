@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Mahasiswa </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('mahasiswa.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Lengkap">
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
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="">Pilih Jenis</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" name="telp" class="form-control" placeholder="Masukkan Telpon">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
