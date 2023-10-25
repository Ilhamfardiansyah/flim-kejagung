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
                            <label class="form-label" for="basic-form-name">Nama/No. Kasus</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Nama/No. Kasus" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nama BBE</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Nama BBE" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">No. BBE</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" />
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
                    <h3>Tindakan</h3>
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
                            <label class="form-label" for="basic-form-name">No. Urut Tindakan</label>
                            <input class="form-control" id="basic-form-name" type="text"
                                placeholder="No. Urut Tindakan" />
                        </div>

                        <label class="form-label" for="timepicker1">Tanggal Tindakan</label>
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

                        <label class="form-label" for="timepicker1">Jam Tindakan</label>
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

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Analis</label>
                            <select class="form-select" id="multiple-select-custom-field3" data-placeholder="Analis"
                                multiple>
                                <option>Analis 1</option>
                                <option>Analis 2</option>
                                <option>Analis 3</option>
                                <option>Analis 4</option>
                                <option>Analis 5</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-form-spesifikasi">MD5</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="MD5" style="height: 100px"></textarea>
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
                            <select class="form-select" id="bulanSelect" aria-label="Default select example3">
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
                        <button class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
        <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
            </svg></button>
    </div>



    {{-- Script JS --}}
    <script src="{{ asset('assets/js/multiple.select3.js') }}"></script>
@endsection
