@extends('Layouts.main')

@section('content')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

    <div class="card mb-3">
        <div class="tab-content">
            <div class="card-body bg-light">

                <div class="search-box" data-list='{"valueNames":["title"]}'>
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                        <input class="form-control search-input fuzzy-search" type="search"
                            placeholder="Input Nama/No. Kasus" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                    </form>
                </div>
                <br>

                <div class="mb-3">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">Nama/No.Kasus</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3" />
                    </div>
                </div>

                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                    id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">

                    <form>
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
                            <label class="form-label" for="basic-form-spesifikasi">Petugas Respon</label>
                            <input class="form-control" id="basic-form-spesifikasi" type="text"
                                placeholder="Petugas Respon" />
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
                            <label class="form-label" for="basic-form-spesifikasi">Lokasi Akuisisi</label>
                            <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Lokasi Akuisisi"
                                style="height: 100px"></textarea>
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

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-name">No. BBE</label>
                                    <input class="form-control" id="basic-form-name" type="text"
                                        placeholder="No. BBE" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-spesifikasi">Barang Bukti
                                        Elektronik</label>
                                    <textarea class="form-control" id="basic-form-spesifikasi" type="Spesifikasi" placeholder="Barang Bukti Elektronik"
                                        style="height: 100px"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                default, until
                                the collapse
                                plugin adds the appropriate classes that we use to style each element. These
                                classes control
                                the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can
                                modify any of
                                this with
                                custom CSS or overriding our default variables. It's also worth noting that just
                                about any
                                HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit
                                overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                default, until the
                                collapse
                                plugin adds the appropriate classes that we use to style each element. These
                                classes control
                                the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can
                                modify any of
                                this with
                                custom CSS or overriding our default variables. It's also worth noting that just
                                about any
                                HTML can go
                                within the <code>.accordion-body</code>, though the transition does limit
                                overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
