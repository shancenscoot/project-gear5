@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Tambah Data Pelanggaran Santri</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="{{ route('data-of-violations.index') }}">Data Pelanggaran</a>
                </li>
                <li class="breadcrumb-item">Tambah Pelanggaran Santri</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Tambah Data Pelanggaran Santri</h1><span
                        class="text-secondary">format
                        table</span>
                </div>
                @foreach ($errors->all() as $item)
                    {{ $item }}
                @endforeach
                <form action="{{ route('data-of-violations.store') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Nama Santri</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('santri_id') is-invalid @enderror"
                                name="santri_id" aria-label="Default select example">
                                <option selected="" value="">Nama Santri</option>
                                @foreach ($santri as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_santri }}</option>
                                @endforeach
                            </select>
                            @error('santri_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Pelanggaran</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('violation_id') is-invalid @enderror"
                                name="violation_id" aria-label="Default select example">
                                <option selected="" value="">Pelanggaran</option>
                                @foreach ($pelanggaran as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_pelanggaran }}</option>
                                @endforeach
                            </select>
                            @error('violation_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Sanksi</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('sanction_id') is-invalid @enderror"
                                name="sanction_id" aria-label="Default select example">
                                <option selected="" value="">Sanksi</option>
                                @foreach ($sanksi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_sanksi }}</option>
                                @endforeach
                            </select>
                            @error('sanction_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4"><button type="submit"
                            class="btn btn-sm px-3 btn-primary rounded-pill">Simpan</button></div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
