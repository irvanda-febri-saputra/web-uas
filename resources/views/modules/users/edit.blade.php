@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambah Data User </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input value="{{ $user->name }}" type="text" name="name" class="form-control"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{ $user->email }}" type="email" name="email" class="form-control"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input value="" type="password" name="password" class="form-control"
                                    placeholder="Masukkan Password">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
