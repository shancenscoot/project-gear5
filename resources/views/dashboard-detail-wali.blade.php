@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold text-capitalize">Data Pelanggaran Santri |
                {{ $santri->nama_santri }}</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
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
                    <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama Santri</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Wali</th>
                                <th>Alamat</th>
                                <th>No telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $santri->nis }}</td>
                                <td class="text-capitalize">{{ $santri->nama_santri }}</td>
                                <td class="text-capitalize">
                                    {{ $santri->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}</td>
                                <td class="text-capitalize">{{ $santri->wali->name ?? 'Belum ada wali' }}</td>
                                <td class="text-capitalize">{{ $santri->wali->alamat }}</td>
                                <td>{{ $santri->wali->no_telp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if ($santri->dataOfViolations->count() > 0)
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Pelanggaran</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelanggaran</th>
                                    <th>Kategori Pelanggaran</th>
                                    <th>Sanksi</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santri->dataOfViolations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-capitalize">{{ $item->violation?->nama_pelanggaran }}</td>
                                        <td class="text-capitalize">
                                            {{ $item->violation->kategori_pelanggaran }}
                                        </td>
                                        <td class="text-capitalize">{{ $item->sanction?->nama_sanksi }}</td>
                                        <td class="text-capitalize">{{ $item->created_at->format('d/m/y') }}</td>
                                        <td class="text-capitalize">{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
