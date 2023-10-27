@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Tambah Data Santri</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="{{ route('santri.index') }}">Data Santri</a>
                </li>
                <li class="breadcrumb-item">Tambah Santri</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Tambah Data Santri</h1><span
                        class="text-secondary">format
                        table</span>
                </div>
                <form action="{{ route('santri.update', $santri->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Nama Santri</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ old('nama_santri', $santri->nama_santri) }}" name="nama_santri"
                                class="form-control @error('nama_santri') is-invalid @enderror" id="inputBiaya"
                                placeholder="nama santri...">
                            @error('nama_santri')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Nama Wali</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('wali_id') is-invalid @enderror" name="wali_id"
                                aria-label="Default select example">
                                <option value="">Isi Wali Santri</option>
                                @foreach ($wali as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $santri->wali_id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('wali_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('jenis_kelamin') is-invalid @enderror"
                                name="jenis_kelamin" aria-label="Default select example">
                                <option selected="" disabled="">Jenis Kelamin</option>
                                <option value="L" {{ $santri->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki - Laki
                                </option>
                                <option value="P" {{ $santri->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputBiaya" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{ old('nis', $santri->nis) }}" name="nis"
                                class="form-control @error('nis') is-invalid @enderror" id="inputBiaya"
                                placeholder="nis...">
                            @error('nis')
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
