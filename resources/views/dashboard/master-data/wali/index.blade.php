@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Wali</h1>
            <a href="{{ route('wali.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Wali</a>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="#">Data Wali</a>
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
                                <th>Nama Wali</th>
                                <th>Nama Anak</th>
                                <th>Alamat</th>
                                <th>No telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Minato</td>
                                <td>Naruto</td>
                                <td>Jln.Hokage, Desa Konoha, No.12</td>
                                <td>04908171909</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Oyeng</td>
                                <td>Agus</td>
                                <td>Jln.Lapangan, Desa Paiton, No 9</td>
                                <td>81979187</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Roronoa Zoro</td>
                                <td>Roronoa Hyuga</td>
                                <td>Jln.Marine, Desa Bounty, No 66</td>
                                <td>1011341414</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Halland</td>
                                <td>Goat Robot</td>
                                <td>Jln.City, Desa manchester, No 11</td>
                                <td>0191878917901</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Daimond Stone</td>
                                <td>Katakuri</td>
                                <td>Jln.Miami, Desa cikago, No 09</td>
                                <td>197419875109</td>
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
