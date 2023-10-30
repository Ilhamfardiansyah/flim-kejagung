@extends('Layouts.main')

@section('content')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

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
                            <label class="form-label" for="basic-form-name">Satker Pemohon</label>
                            <select class="form-select" id="multiple-select-custom-field" data-placeholder="Satker Pemohon"
                                multiple>
                                <option>Satker 1</option>
                                <option>Satker 2</option>
                                <option>Satker 3</option>
                                <option>Satker 4</option>
                                <option>Satker 5</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Bulan</label>
                            <select class="form-select" id="bulanSelect" aria-label="Default select example">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>

                        <script>
                            // Mendapatkan elemen select
                            var bulanSelect = document.getElementById("bulanSelect");

                            // Mendapatkan tanggal saat ini
                            var tanggalSekarang = new Date();

                            // Mendapatkan bulan saat ini (dalam format "01", "02", dst.)
                            var bulanSaatIni = String(tanggalSekarang.getMonth() + 1).padStart(2, '0');

                            // Mengatur nilai pilihan bulan ke bulan saat ini
                            bulanSelect.value = bulanSaatIni;
                        </script>


                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">No. BBE</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">Barang Bukti Elektronik</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Barang Bukti Elektronik"
                                style="height: 100px"></textarea>
                        </div>
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
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Dikuasai Oleh" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Disita Dari</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Disita Dari" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Lokasi Disita</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Lokasi Disita" />
                            <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">Kondisi/Keterangan</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Kondisi/Keterangan"
                                style="height: 100px"></textarea>
                        </div>

                        <label class="form-label" for="timepicker1">Jam Sita</label>
                        <input class="form-control datetimepicker" type="time" id="timepicker1" />

                        <script>
                            // Fungsi untuk mengisi input waktu dengan waktu saat ini
                            function isiWaktuOtomatis() {
                                var inputWaktu = document.getElementById("timepicker1");
                                var sekarang = new Date();
                                var jam = sekarang.getHours();
                                var menit = sekarang.getMinutes();

                                // Format jam dan menit ke dalam format "HH:mm"
                                var waktuFormat = (jam < 10 ? "0" : "") + jam + ":" + (menit < 10 ? "0" : "") + menit;

                                // Isi nilai input waktu dengan waktu saat ini
                                inputWaktu.value = waktuFormat;
                            }

                            // Panggil fungsi saat halaman dimuat
                            window.onload = isiWaktuOtomatis;
                        </script>

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
                            <label class="form-label" for="basic-form-spesifikasi">Petugas Respon</label>
                            <input class="form-control" id="basic-form-spesifikasi" type="text"
                                placeholder="Petugas Respon" />
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label" for="basic-form-name">JABATAN</label>
                            <select class="form-select" id="multiple-select-custom-field3" data-placeholder="Jabatan"
                                multiple>
                                <option>Jabatan 1</option>
                                <option>jabatan 2</option>
                                <option>jabatan 3</option>
                                <option>jabatan 4</option>
                                <option>jabatan 5</option>
                            </select>
                        </div> --}}
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

                        <label class="form-label" for="timepicker1">Tanggal Sita</label>
                        <input class="form-control datetimepicker" type="date" id="tanggalInput2" />

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
                            <select class="form-select" id="bulanSelect" aria-label="Default select example">
                                <option>User 01</option>
                                <option>User 02</option>
                                <option>User 03</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">Tools & Metode Akuisisi</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Tools & Metode Akuisisi"
                                style="height: 100px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Petugas Akuisi</label>
                            <select class="form-select" id="bulanSelect" aria-label="Default select example">
                                <option>User 01</option>
                                <option>User 02</option>
                                <option>User 03</option>
                            </select>
                        </div>

                        <label class="form-label" for="basic-form-name">Berhasil atau Gagal</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" />
                                <label class="form-check-label" for="inlineRadio1">Berhasil</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" />
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
        background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
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
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Size" />
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

    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
