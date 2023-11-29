@extends('Layouts.main')

@section('content')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

    <div class="card mb-3">
        <div class="tab-content">
            <div class="card-body bg-light">
                <div class="input-group">
                    <input type="search" class="form-control rounded" aria-label="Search" aria-describedby="search-addon" />
                    <a type="button" href="{{ route('search') }}" class="btn btn-outline-primary">Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mb-3">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary">Tambah BBE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="tab-content">
            <div class="card-body bg-light">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">

                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">No. BBE</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" />
                        </div>

                        <div class="text-center"><b>
                                <h3>Barang Bukti Elektronik
                            </b>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JENIS BBE</label>
                            <select class="form-select" id="multiple-select-custom-field" name="jenis_bbe"
                                data-placeholder="Masukan Jenis BBE" multiple>
                                <option>Mobile Forensic</option>
                                <option>Computer Forensic</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">SPESIFIKASI BBE</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" name="spesifikasi_bbe" type="Spesifikasi"
                                placeholder="Spesifikasi BBE"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">IMEI/Serial Number</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Barang Bukti Elektronik"></textarea>
                        </div>
                        {{-- Verifikasi permohonan --}}

                        <div class="card mb-3">
                            <div class="bg-holder d-none d-lg-block bg-card"
                                style="
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h3>Tim Respon</h3>
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
                                                <label class="form-label" for="basic-form-name">Dikuasai Oleh</label>
                                                <input class="form-control" id="basic-form-name" type="text"
                                                    placeholder="Dikuasai Oleh" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Disita Dari</label>
                                                <input class="form-control" id="basic-form-name" type="text"
                                                    placeholder="Disita Dari" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Lokasi Sita</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="1">Jakarta</option>
                                                    <option value="2">Medan</option>
                                                    <option value="3">Surabaya</option>
                                                    <option value="4">Makasar</option>
                                                    <option value="5">Samarinda</option>
                                                </select>
                                            </div>

                                            <label class="form-label" for="timepicker1">Jam Sita</label>
                                            <input class="form-control datetimepicker1" type="time" id="jamsita" />
                                            <script src="{{ asset('assets/js/jamsita.js') }}"></script>

                                            <label class="form-label" for="timepicker1">Tanggal Sita</label>
                                            <input class="form-control datetimepicker" type="date" id="tanggalInput" />

                                            <script>
                                                // Dapatkan elemen input tanggal
                                                var tanggalInput = document.getElementById("tanggalInput");

                                                // Dapatkan tanggal saat ini
                                                var currentDate = new Date();

                                                // Format tanggal dalam bentuk YYYY-MM-DD
                                                var year = currentDate.getFullYear();
                                                var month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
                                                var day = currentDate.getDate().toString().padStart(2, "0");
                                                var formattedDate = year + "-" + month + "-" + day;

                                                // Setel nilai tanggal input ke tanggal saat ini
                                                tanggalInput.value = formattedDate;
                                            </script>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Petugas Respon</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="1">Petugas 1</option>
                                                    <option value="2">Petugas 2</option>
                                                    <option value="3">Petugas 3</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
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
                                        <h3>Tim Lab
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

                                            <label class="form-label" for="timepicker1">Diterima Tanggal</label>
                                            <input class="form-control datetimepicker" type="date"
                                                id="tanggalInput2" />

                                            <script>
                                                // Dapatkan elemen input tanggal
                                                var tanggalInput = document.getElementById("tanggalInput2");

                                                // Dapatkan tanggal saat ini
                                                var currentDate = new Date();

                                                // Format tanggal dalam bentuk YYYY-MM-DD
                                                var year = currentDate.getFullYear();
                                                var month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
                                                var day = currentDate.getDate().toString().padStart(2, "0");
                                                var formattedDate = year + "-" + month + "-" + day;

                                                // Setel nilai tanggal input ke tanggal saat ini
                                                tanggalInput.value = formattedDate;
                                            </script>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Petugas Penerima</label>
                                                <select class="form-select" id="bulanSelect"
                                                    aria-label="Default select example">
                                                    <option>User 01</option>
                                                    <option>User 02</option>
                                                    <option>User 03</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-spesifikasi">Tools & Metode
                                                    Akuisisi</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Tools & Metode Akuisisi"
                                                    style="height: 100px"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Petugas Akuisi</label>
                                                <select class="form-select" id="bulanSelect"
                                                    aria-label="Default select example">
                                                    <option>User 01</option>
                                                    <option>User 02</option>
                                                    <option>User 03</option>
                                                </select>
                                            </div>

                                            <label class="form-label" for="timepicker1">Jam Akuisisi</label>
                                            <input class="form-control datetimepicker" type="time" id="jamakusisi" />
                                            <script src="{{ asset('assets/js/jamakuisisi.js') }}"></script>

                                            <label class="form-label" for="timepicker1">Tanggal Akuisisi</label>
                                            <input class="form-control datetimepicker" type="date"
                                                id="tanggalAkuisisi" />

                                            <script>
                                                // Dapatkan elemen input tanggal
                                                var tanggalAkuisisi = document.getElementById("tanggalAkuisisi");

                                                // Dapatkan tanggal saat ini
                                                var currentDate = new Date();

                                                // Format tanggal dalam bentuk YYYY-MM-DD
                                                var year = currentDate.getFullYear();
                                                var month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
                                                var day = currentDate.getDate().toString().padStart(2, "0");
                                                var formattedDate = year + "-" + month + "-" + day;

                                                // Setel nilai tanggal input ke tanggal saat ini
                                                tanggalAkuisisi.value = formattedDate;
                                            </script>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-spesifikasi">Lokasi
                                                    Akuisisi</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Lokasi Akuisisi"
                                                    style="height: 100px"></textarea>
                                            </div>

                                            <label class="form-label" for="basic-form-name">Berhasil atau Gagal</label>
                                            <div class="mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                                    <label class="form-check-label" for="inlineRadio1">Berhasil</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                    <label class="form-check-label" for="inlineRadio2">Gagal</label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
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
                                        <h3>Nilai Hash</h3>
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
                                                <label class="form-label" for="basic-form-spesifikasi">MD5</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="MD5"
                                                    style="height: 100px"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-spesifikasi">SHA1</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="SHA1"
                                                    style="height: 100px"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-spesifikasi">SHA256</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="SHA256"
                                                    style="height: 100px"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Size</label>
                                                <input class="form-control" id="basic-form-name" type="text"
                                                    placeholder="Size" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-name">Lokasi Barang</label>
                                                <input class="form-control" id="basic-form-name" type="text"
                                                    placeholder="Lokasi Barang" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="basic-form-spesifikasi">Keterangan</label>
                                                <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Keterangan"
                                                    style="height: 100px"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Script JS --}}
    <script src="{{ asset('assets/js/multiple.select.js') }}"></script>
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
