@extends('Layouts.main')

@section('content')
    <style>
        #video {
            border: 1px solid black;
            box-shadow: 2px 2px 3px black;
            width: 320px;
            height: 240px;
        }

        #photo {
            border: 1px solid black;
            box-shadow: 2px 2px 3px black;
            width: 320px;
            height: 240px;
        }

        #canvas {
            position: fixed;
            display: none;
            top: 50px;
            left: 50px;
        }

        .camera {
            width: 340px;
            display: inline-block;
        }

        .output {
            position: relative;
            display: flex;
            top: 50px;
            right: 50px;
            justify-content: flex-end;
            gap: 10px;
            width: 340px;
            vertical-align: top;
        }

        #startbutton {
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            bottom: 32px;
            background-color: rgba(0, 150, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            font-family: "Lucida Grande", "Arial", sans-serif;
            color: rgba(255, 255, 255, 1);
        }

        .contentarea {
            font-size: 16px;
            font-family: "Lucida Grande", "Arial", sans-serif;
            width: 760px;
        }
    </style>

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

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview1"
                                                style="width: 150px; height: 180px"
                                                src="{{ asset('assets/img/icons/avatar.png') }}" />
                                            <br />
                                            <input id="uploadImage1" class="form-control" type="file"
                                                onchange="PreviewImage1();" />

                                            <script type="text/javascript">
                                                function PreviewImage1() {
                                                    var oFReader = new FileReader();
                                                    oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);
                                                    oFReader.onload = function(oFREvent) {
                                                        document.getElementById("uploadPreview1").src = oFREvent.target.result;
                                                    };
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview2"
                                                style="width: 150px; height: 180px"
                                                src="{{ asset('assets/img/icons/avatar.png') }}" />
                                            <br />
                                            <input id="uploadImage2" class="form-control" type="file"
                                                onchange="PreviewImage2();" />

                                            <script type="text/javascript">
                                                function PreviewImage2() {
                                                    var oFReader = new FileReader();
                                                    oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
                                                    oFReader.onload = function(oFREvent) {
                                                        document.getElementById("uploadPreview2").src = oFREvent.target.result;
                                                    };
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                        <div class="card-body bg-light">
                            <div class="tab-content">
                                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                                    <form>

                                        <label class="form-label" for="timepicker1">Diterima Tanggal</label>
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
                                            <label class="form-label" for="basic-form-name">Petugas
                                                Penerima</label>
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
                                        <input class="form-control datetimepicker" type="date" id="tanggalAkuisisi" />

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

                                        <label class="form-label" for="basic-form-name">Berhasil atau
                                            Gagal</label>
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
                            <a id="tambah-bbe" class="btn btn-primary">Tambah BBE</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div id="form-container">

    </div>


    <script>
        $(document).ready(function() {

            let bbeCount = 0;

            $("#tambah-bbe").click(function() {
                bbeCount++;

                let formBBE = `
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
                                        <select class="form-select" id="multiple-select2-custom-field" name="jenis_bbe"
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

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-spesifikasi">IMEI/Serial Number</label>
                                        <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Barang Bukti Elektronik"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview1"
                                                            style="width: 150px; height: 180px"
                                                            src="{{ asset('assets/img/icons/avatar.png') }}" />
                                                        <br />
                                                        <input id="uploadImage1" class="form-control" type="file"
                                                            onchange="PreviewImage1();" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview2"
                                                            style="width: 150px; height: 180px"
                                                            src="{{ asset('assets/img/icons/avatar.png') }}" />
                                                        <br />
                                                        <input id="uploadImage2" class="form-control" type="file"
                                                            onchange="PreviewImage2();" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                $("#form-container").append(formBBE);

                // Menjalankan select2 di elemen select baru yang ditambahkan
                $("#form-container").find("select").select2({
                    theme: "bootstrap-5",
                    width: $(this).data("width") ?
                        $(this).data("width") : $(this).hasClass("w-100") ?
                        "100%" : "style",
                    placeholder: $(this).data("placeholder"),
                    closeOnSelect: false,
                    tags: true,
                });

                // Fungsi untuk pratinjau gambar
                function PreviewImage1() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);
                    oFReader.onload = function(oFREvent) {
                        document.getElementById("uploadPreview1").src = oFREvent.target.result;
                    };
                }

                function PreviewImage2() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
                    oFReader.onload = function(oFREvent) {
                        document.getElementById("uploadPreview2").src = oFREvent.target.result;
                    };
                }
            });
        });
    </script>




    {{-- Script JS --}}
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select.js') }}">
        < /> <
        script src = "{{ asset('assets/js/realtime.js') }}" >
    </script>
@endsection
