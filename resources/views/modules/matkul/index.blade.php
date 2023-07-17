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
                        <h4>Data Matkul
                            <a href="{{ route('matkul.create') }}" class="btn btn-md btn-primary">Tambah Matkul</a>
                        </h4>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="dataTable" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>SKS</th>
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
                ajax: '{{ route('get.matkul') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },

                    {
                        data: 'kd_matkul',
                        name: 'kd_matkul',
                    },

                    {
                        data: 'nama_matkul',
                        name: 'nama_matkul',
                    },
                    {
                        data: 'sks',
                        name: 'sks',
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
