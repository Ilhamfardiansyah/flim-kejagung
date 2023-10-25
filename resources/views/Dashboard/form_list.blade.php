@extends('Layouts.main')

@section('content')
    {{-- Form Selected --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                    <form>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NAMA KASUS</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Nama Kasus" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JENIS BBE</label>
                            <select class="form-select" id="multiple-select-custom-field"
                                data-placeholder="Masukan Jenis BBE" multiple>
                                <option>Mobile Forensic</option>
                                <option>Computer Forensic</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">SPESIFIKASI BBE</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Spesifikasi BBE"
                                style="height: 100px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">PEMILIK BBE</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Pemilik BBE" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">IMEI/Serial Number</label>
                            <input class="form-control" id="basic-form-name" type="text"
                                placeholder="IMEI/Serial Number" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">PARAMETER SECURITY</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Parameter Security"
                                style="height: 100px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">KONDISI KETIKA DI TERIMA</label>
                            <input class="form-control" id="basic-form-name" type="text"
                                placeholder="Kondisi Ketika Di Termia" />
                        </div>

                        <div class="mb-3">
                            <label class="form-lable" for="waktu">WAKTU DI TERIMA</label>
                            <input class="form-control" type="text" id="waktu" readonly>
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
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Nama Pemohon" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NIP</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="NIP" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">NRP</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="NRP" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JABATAN</label>
                            <select class="form-select" id="multiple-select-custom-field2" data-placeholder="Jabatan"
                                multiple>
                                <option>Jabatan 1</option>
                                <option>jabatan 2</option>
                                <option>jabatan 3</option>
                                <option>jabatan 4</option>
                                <option>jabatan 5</option>
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
                                    id="inlineRadio1" value="option1" />
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
                                    id="inlineRadio3" value="option3" />
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
                                style="height: 100px"></textarea>
                        </div>

                        <label class="form-label" for="basic-form-name">SDM YANG KOMPETEN</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                    id="inlineRadio5" value="option5" />
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
                                    id="inlineRadio7" value="option7" />
                                <label class="form-check-label" for="inlineRadio7">Tersedia</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4"
                                    id="inlineRadio8" value="option8" />
                                <label class="form-check-label" for="inlineRadio8">Tidak Tersedia</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">TANGGAL PERMOHONAN</label>
                            <input class="form-control" id="basic-form-name" type="date"
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
@endsection
