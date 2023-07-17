@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data Nilai</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('nilai.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <select name="mahasiswa_id" class="form-control">
                                    <option value="" disabled selected>---Pilih Mahasiswa---</option>
                                    @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}">{{ $mhs->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Matakuliah</label>
                                <select name="matkul_id" class="form-control">
                                    <option value="" disabled selected>---Pilih Matakuliah---</option>
                                    @foreach ($matkul as $mk)
                                        <option value="{{ $mk->id }}">{{ $mk->nama_matkul }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <input type="number" name="nilai" class="form-control" placeholder="Masukkan SKS">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('nilai.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
