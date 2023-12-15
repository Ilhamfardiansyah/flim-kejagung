@extends('Layouts.main')

@section('content')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

    <div class="card mb-3">
        <div class="tab-content">
            <div class="card-body bg-light">

                <div class="mb-3">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">Nama/No.Kasus</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3" />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">Nomor BBE</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3" />
                    </div>
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
                                <h3>Berita Acara Akuisisi</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nomor BA Akuisisi</label>
                    <input class="form-control" id="basic-form-name" type="text" placeholder="Nama BBE" />
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
                                <h3>Alinea Pertama</h3>
                            </div>
                        </div>
                    </div>
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

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Tanggal</label>
                    <input class="form-control" id="basic-form-name" type="date" placeholder="Nama BA-A" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama Analis</label>
                    <select class="form-select" id="bulanSelect" aria-label="Default select example">
                        <option>Analis 01</option>
                        <option>Analis 02</option>
                        <option>Analis 03</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Pangkat</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Jabatan</label>
                    <input class="form-control" id="basic-form-name" type="text" />
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
                                <h3>Alinea Kedua</h3>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nomor SP & Perihal</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Barang Bukti Elektronik</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Pemilik BBE</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Perangkat yang Digunakan (Alat Forensik)</label>
                    <textarea class="form-control" id="basic-form-name" type="text"></textarea>
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
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">MD5</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">SHA1</label>
                    <input class="form-control" id="basic-form-name" type="text" />
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
                    <select class="form-select">
                        <option value="">Saksi 1</option>
                        <option value="">Saksi 2</option>
                        <option value="">Saksi 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP Saksi 1</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Nama Saksi 2</label>
                    <select class="form-select">
                        <option value="">Saksi 1</option>
                        <option value="">Saksi 2</option>
                        <option value="">Saksi 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">NIP Saksi 2</label>
                    <input class="form-control" id="basic-form-name" type="text" />
                </div>

            </div>
        </div>
    </div>

    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
