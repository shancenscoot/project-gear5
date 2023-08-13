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
                            @forelse ($wali as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-capitalize">{{ $item->name }}</td>
                                    <td class="text-capitalize">
                                        @forelse ($item->santri as $item)
                                            <ul>
                                                <li>
                                                    {{ $item->nama_santri ?? '-' }}
                                                </li>
                                            </ul>
                                        @empty
                                            <ul>
                                                <li>
                                                    tidak ada anak
                                                </li>
                                            </ul>
                                        @endforelse
                                    </td>
                                    <td class="text-capitalize">{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>
                                        <a href="{{ route('wali.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <form method="POST" onsubmit="return confirm('Apakah anda yakin?')"
                                            action="{{ route('wali.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button href="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
