@extends('Layouts.main')

@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>A. Informasi Permohonan</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="nama_kasus">NAMA KASUS</label>
                            <input class="form-control" id="nama_kasus" name="nama_kasus" type="text"
                                value="CASE_001_JAKARTA_10_2023" placeholder="Nama Kasus" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JENIS BBE</label>
                            <select class="form-select" id="multiple-select-custom-field" name="jenis_bbe"
                                data-placeholder="Masukan Jenis BBE" multiple>
                                <option value="Mobile Forensic" selected>Mobile Forensic</option>
                                <option value="Computer Forensic" selected>Computer Forensic</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">SPESIFIKASI BBE</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" name="spesifikasi_bbe" type="Spesifikasi"
                                placeholder="Spesifikasi BBE" style="height: 100px">SAMSUNG GALAXI 23/ HDD INTERNAL/ HDD EKSTERNAL/ USERNAME@MAIL.COM</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">PEMILIK BBE</label>
                            <input class="form-control" id="basic-form-name" name="pemilik_bbe" type="text"
                                placeholder="Pemilik BBE" value="BAMBANG" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">IMEI/Serial Number</label>
                            <textarea class="form-control" id="basic-form-name" name="imei/sn" type="text" placeholder="IMEI/Serial Number"
                                style="height: 100px">IMEI 1 :123456789, IMEI 2 :213456789, S/N :QWERTYU123</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">PARAMETER SECURITY</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" name="parameter" type="Spesifikasi"
                                placeholder="Parameter Security" style="height: 100px">PIN/PATTERN/PASSWORD NO. SIMCARD</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">KONDISI KETIKA DI TERIMA</label>
                            <input class="form-control" id="basic-form-name" name="kondisi" type="text"
                                placeholder="Kondisi Ketika Di Termia" value="BAIK" />
                        </div>

                        <div class="mb-3">
                            <label class="form-lable" for="waktu">WAKTU DI TERIMA</label>
                            <input class="form-control" type="text" id="waktu" name="waktu" readonly>
                        </div>
                        <script src="{{ asset('assets/js/realtime.js') }}"></script>
                </div>
            </div>
        </div>
    </div>

    {{-- Verifikasi permohonan --}}

    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>B. Ferivikasi Permohonan</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NAMA PEMOHON</label>
                            <input class="form-control" id="basic-form-name" type="text" name="nama_pemohon"
                                placeholder="Nama Pemohon" value="RAHMAT" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NIP</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="NIP"
                                value="123456" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NRP</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="NRP"
                                value="987654" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JABATAN</label>
                            <select class="form-select" id="multiple-select-custom-field2" data-placeholder="Jabatan"
                                multiple>
                                <option selected>Jabatan 1</option>
                                <option>jabatan 2</option>
                                <option>jabatan 3</option>
                                <option>jabatan 4</option>
                                <option>jabatan 5</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Satker Pemohon</label>
                            <select class="form-select" id="multiple-select-custom-field3"
                                data-placeholder="Satker Pemohon" multiple>
                                <option>Satker 1</option>
                                <option selected>Satker 2</option>
                                <option>Satker 3</option>
                                <option>Satker 4</option>
                                <option>Satker 5</option>
                            </select>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>C. <span>
                            <font size="4">Ketersediaan Peralatan Digital Forensik, Metode Pemeriksa, Dan Sumber Daya
                                Manusia</font>
                        </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                    <form>
                        <label class="form-label" for="basic-form-name">PERALATAN DIGITAL FORENSIK</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" checked />
                                <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Tidak Tersedia</label>
                            </div>
                        </div>

                        <label class="form-label" for="basic-form-name">METODE DAN PROSEDUR PEMERIKSAAN</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                    id="inlineRadio3" value="option3" checked />
                                <label class="form-check-label" for="inlineRadio3">Tersedia</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2"
                                    id="inlineRadio4" value="option4" />
                                <label class="form-check-label" for="inlineRadio4">Tidak Tersedia</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">TEKNIK PEMERIKSAAN</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Teknik Pemeriksaan"
                                style="height: 100px">Logical</textarea>
                        </div>

                        <label class="form-label" for="basic-form-name">SDM YANG KOMPETEN</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                    id="inlineRadio5" value="option5" checked />
                                <label class="form-check-label" for="inlineRadio5">Tersedia</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                    id="inlineRadio6" value="option6" />
                                <label class="form-check-label" for="inlineRadio6">Tidak Tersedia</label>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>D. Tindak Lanjut</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                    <form>
                        <label class="form-label" for="basic-form-name">TINDAK LANJUT PERMOHONAN</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4"
                                    id="inlineRadio7" value="option7" checked />
                                <label class="form-check-label" for="inlineRadio7">Diterima</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4"
                                    id="inlineRadio8" value="option8" />
                                <label class="form-check-label" for="inlineRadio8">Ditolak</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Lokasi Permohonan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                <option value="1" selected>Jakarta</option>
                                <option value="2">Medan</option>
                                <option value="3">Surabaya</option>
                                <option value="4">Makasar</option>
                                <option value="5">Samarinda</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">TANGGAL PERMOHONAN</label>
                            <input class="form-control" id="basic-form-name" type="date" value="2023-11-03"
                                placeholder="Tanggal Permohonan" />
                        </div>
                </div>
            </div>
            <button class="btn btn-success">Simpan</button>
        </div>
    </div>

    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select3.js') }}"></script>
@endsection
