@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Nilai
                            <a href="{{ route('nilai.create') }}" class="btn btn-md btn-primary">Tambah Nilai</a>
                        </h4>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="dataTable" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Nama Matakuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var dataTable = $("#dataTable").DataTable({
                processing: true,
                serverSide: true,
                autoWidth: true,
                stateSave: true,
                "order": [
                    [0, 'desc']
                ],
                ajax: '{{ route('get.nilai') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },

                    {
                        data: 'mahasiswa.nama',
                        name: 'mahasiswa.nama',
                    },

                    {
                        data: 'matkul.nama_matkul',
                        name: 'matkul.nama_matkul',
                    },
                    {
                        data: 'matkul.sks',
                        name: 'matkul.sks',
                    },
                    {
                        data: 'nilai',
                        name: 'nilai',
                    },

                    {
                        data: 'aksi',
                        name: 'aksi',
                        orderable: false,
                        searchable: false,
                    },

                ]
            });
        });
    </script>
@endpush
