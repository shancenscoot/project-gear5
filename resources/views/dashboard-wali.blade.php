@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Pelanggaran Santri</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Laporan</li>
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="#">Data Pelanggaran Santri</a>
                </li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Santri</th>
                                <th>Pelanggaran</th>
                                <th>Sanksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wali as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->santri->nis }}</td>
                                    <td class="text-capitalize">{{ $item->santri->nama_santri }}</td>
                                    <td class="text-capitalize">{{ $item->violation->nama_pelanggaran }}</td>
                                    <td class="text-capitalize">{{ $item->sanction->nama_sanksi }}</td>
                                    <td class="text-capitalize">{{ $item->status }}</td>
                                </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
