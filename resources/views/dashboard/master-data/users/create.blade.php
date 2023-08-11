@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Tambah Data Users</h1>
        </div>

        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bolder" aria-current="page">
                    <a href="{{ route('users.index') }}">Data Users</a>
                </li>
                <li class="breadcrumb-item">Tambah User</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Tambah Data User</h1><span
                        class="text-secondary">format
                        table</span>
                </div>
                <form>
                    <div class="row mb-4"><label for="inputBiaya" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10"><input type="text" class="form-control" id="inputBiaya"
                                placeholder="nama..."></div>
                    </div>
                    <div class="row mb-4"><label for="inputBiaya" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10"><input type="email" class="form-control" id="inputBiaya"
                                placeholder="email..."></div>
                    </div>
                    <div class="row mb-4"><label for="inputBiaya" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10"><input type="number" class="form-control" id="inputBiaya"
                                placeholder="no telp..."></div>
                    </div>
                    <div class="row mb-4"><label for="inputKategori" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected="">role</option>
                                <option value="1">admin</option>
                                <option value="2">petugas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4"><label for="inputBiaya" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10"><input type="password" class="form-control" id="inputBiaya"
                                placeholder="password..."></div>
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
