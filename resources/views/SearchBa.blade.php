@extends('Layouts.main')

@section('content')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

    <div class="card mb-3">
        <div class="tab-content">
            <div class="card-body bg-light">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Input Nama/No. Kasus" aria-label="Search"
                        aria-describedby="search-addon" />
                    <a type="button" class="btn btn-outline-primary">Search</a>
                </div>
                <br>

                <div class="mb-3">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">Nama/No.Kasus</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3"
                            value="DE_001_CASE_001_JAKARTA_10_2023" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Pilih Nama BBE</label>
                    <select class="form-select" id="bulanSelect" aria-label="Default select example">
                        <option>BBE 01</option>
                        <option selected>BBE 02</option>
                        <option>BBE 03</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama BBE</label>
                    <input class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" value="BBE 02" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama BA-A</label>
                    <input class="form-control" id="basic-form-name" type="text" placeholder="Nama BA-A"
                        value="BA-A/001/CASE/001/JAKARTA/10/2023" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Hari</label>
                    <select class="form-select" id="bulanSelect" aria-label="Default select example">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jum'at</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
                </div>

                <label class="form-label" for="timepicker1">Tanggal</label>
                <input class="form-control datetimepicker1" type="time" />
                <script src="{{ asset('assets/js/jamsita.js') }}"></script>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama Analis</label>
                    <select class="form-select" id="bulanSelect" aria-label="Default select example">
                        <option>Analis 01</option>
                        <option>Analis 02</option>
                        <option selected>Analis 03</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Pangkat</label>
                    <input class="form-control" id="basic-form-name" type="text" value="Inisial Pangkat A" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP</label>
                    <input class="form-control" id="basic-form-name" type="text" value="123456" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Jabatan</label>
                    <input class="form-control" id="basic-form-name" type="text" value="Inisial Jabatan A" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nomor SP & Perihal</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Pemilik BBE</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Akuisisi Digital Forensik</label>
                    <textarea class="form-control" id="basic-form-name" type="text" placeholder="No. BBE"></textarea>
                </div>

                <div class="card mb-3">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="
                    background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Nilai Hash</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Size(bytes)</label>
                    <input class="form-control" id="basic-form-name" type="text" value="12456879" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">MD5</label>
                    <input class="form-control" id="basic-form-name" type="text"
                        value="sadg345ftgh345g3ryhdfj76jg" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">SHA1</label>
                    <input class="form-control" id="basic-form-name" type="text"
                        value="bdfgiug398rgj0234rk29ekfo3kg039rg390hi" />
                </div>

                <div class="card mb-3">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="
                    background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Saksi</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama Saksi 1</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP Saksi 1</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama Saksi 2</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP Saksi 2</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <a href="{{ route('ba_akuisisi') }}" class="btn btn-success">Simpan</a>
            </div>
        </div>
    </div>

    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
