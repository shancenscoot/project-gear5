@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Pelanggaran Santri</h1>
            <a href="{{ route('data-of-violations.create') }}" type="button"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1190815801</td>
                                <td>Naruto</td>
                                <td>Tidak Izin Keluar Pondok Pesantren</td>
                                <td>Potong Gundul</td>
                                <td>Proses</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>914809184091</td>
                                <td>Agus</td>
                                <td>Santri Merokok</td>
                                <td>Surat Peringatan</td>
                                <td>Selesai</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>331875981757891</td>
                                <td>Roronoa Hyuga</td>
                                <td>Santri Bolos Ngaji</td>
                                <td>Skorsing</td>
                                <td>Proses</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection