@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Data Pelanggaran</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="{{ route('violations.index') }}">Pelanggaran</a>
                </li>
                <li class="breadcrumb-item">Edit Pelanggaran</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Edit Data Pelanggaran</h1><span
                        class="text-secondary">format
                        table</span>
                </div>
                <form action="{{ route('violations.update', $violation->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4"><label for="inputBiaya" class="col-sm-2 col-form-label">Nama Pelanggaran</label>
                        <div class="col-sm-10"><input type="text" name="nama_pelanggaran"
                                value="{{ $violation->nama_pelanggaran }}" class="form-control" id="inputBiaya"
                                placeholder="nama pelanggaran..."></div>
                    </div>
                    <div class="row mb-4"><label for="inputKategori" class="col-sm-2 col-form-label">
                            Kategori Pelanggaran</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control @error('kategori_pelanggaran') is-invalid @enderror"
                                name="kategori_pelanggaran" aria-label="Default select example">
                                <option selected="" disabled="">kategori pelanggaran</option>
                                <option value="ringan" {{ $violation->kategori_pelanggaran == 'ringan' ? 'selected' : '' }}>
                                    Ringan</option>
                                <option value="sedang" {{ $violation->kategori_pelanggaran == 'sedang' ? 'selected' : '' }}>
                                    Sedang</option>
                                <option value="berat" {{ $violation->kategori_pelanggaran == 'berat' ? 'selected' : '' }}>
                                    Berat</option>
                            </select>
                        </div>
                    </div>

                    {{-- deskripsi --}}
                    {{-- <div class="row mb-4"><label for="deskripsi" class="col-sm-2 py-0 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="deskripsi..."></textarea>
                        </div>
                    </div> --}}

                    {{-- status --}}
                    {{-- <div class="row mb-4">
                        <label for="inputNominal" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 d-flex gap-4 align-items-center">
                            <div class="form-check mr-3"><input type="radio" class="form-check-input"
                                    id="validationFormCheck2" name="radio-stacked" checked="" required=""><label
                                    class="form-check-label" for="validationFormCheck2">Aktif</label></div>
                            <div class="form-check"><input type="radio" class="form-check-input" id="validationFormCheck3"
                                    name="radio-stacked" required=""><label class="form-check-label"
                                    for="validationFormCheck3">Nonaktif</label>
                                <div class="invalid-feedback">More example invalid feedback text
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="d-flex justify-content-end mt-4"><button type="submit"
                            class="btn btn-sm px-3 btn-primary rounded-pill">Simpan</button></div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
