@extends('Layouts.main')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="mb-2"><a href="">DE_001_CASE_001_JAKARTA_10_2023</a></h5><span></span></a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item"
                            href="#">Report</a><a class="dropdown-item" href="#">Archive</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete
                            user</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0">Details</h5>
                </div>
                {{-- <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span
                            class="fas fa-pencil-alt fs--2 me-1"></span>Update details</a></div> --}}
            </div>
        </div>
        <div class="card-body bg-light border-top">
            <div class="row">
                <div class="col-lg col-xxl-5">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase"></h6>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">NO BBE</p>
                        </div>
                        <div class="col">DE_001_CASE_099_SATKER PEMOHON_10_2023
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">BARANG BUKTI ELEKTRONIK</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">REDMI NOTE 9 WARNA HIJAU (M351236), SN : 7324TDFU356, IMEI 1
                                : 12345678910, IMEI
                                2 : 10987654321</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">DIKUASAI OLEH
                            </p>
                        </div>
                        <div class="col">
                            BAMBANG
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">DISITA DARI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">BAMBANG
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">LOKASI SITA
                            </p>
                        </div>
                        <div class="col">
                            KEJATI KOTA
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">KONDISI/KETERANGAN
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">NYALA, LAYAR RETAK, SIM : 08123456789
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">JAM SITA
                            </p>
                        </div>
                        <div class="col">
                            17:00
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">TANGGAL SITA
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">9/20/2023
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS RESPON
                            </p>
                        </div>
                        <div class="col">
                            GHIFARI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">DITERIMA TANGGAL
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">10/11/2023
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS PENERIMA
                            </p>
                        </div>
                        <div class="col">
                            FAHMI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">TOOLS & METODE AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">"UFED
                                FILE SYSTEM"
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            FAHMI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">JAM AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">10.00
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">TANGGAL AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            10/12/2023
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">LOKASI AKUISISI/FRED
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">DATA EXPERT 1
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">BERHASIL/GAGAL
                            </p>
                        </div>
                        <div class="col">
                            GAGAL
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">MD5
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">sadg345ftgh345g3ryhdfj76jg
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">SHA1
                            </p>
                        </div>
                        <div class="col">
                            bdfgiug398rgj0234rk29ekfo3kg039rg390hi
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">SHA256
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">
                                egse9348gjfdokgj0398ug
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">Size
                            </p>
                        </div>
                        <div class="col">
                            12456879
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">LOKASI BARANG
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">
                                RUANG MAHABRATA
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">KETERANGAN
                            </p>
                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>
                <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase"></h6>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">NO BBE</p>
                        </div>
                        <div class="col">DE_001_CASE_099_SATKER PEMOHON_10_2023
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">BARANG BUKTI ELEKTRONIK</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">REDMI NOTE 9 WARNA HIJAU (M351236), SN : 7324TDFU356, IMEI
                                1
                                : 12345678910, IMEI
                                2 : 10987654321</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">DIKUASAI OLEH
                            </p>
                        </div>
                        <div class="col">
                            BAMBANG
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">DISITA DARI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">BAMBANG
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">LOKASI SITA
                            </p>
                        </div>
                        <div class="col">
                            KEJATI KOTA
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">KONDISI/KETERANGAN
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">NYALA, LAYAR RETAK, SIM : 08123456789
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">JAM SITA
                            </p>
                        </div>
                        <div class="col">
                            17:00
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">TANGGAL SITA
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">9/20/2023
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS RESPON
                            </p>
                        </div>
                        <div class="col">
                            GHIFARI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">DITERIMA TANGGAL
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">10/11/2023
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS PENERIMA
                            </p>
                        </div>
                        <div class="col">
                            FAHMI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">TOOLS & METODE AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">"UFED
                                FILE SYSTEM"
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">PETUGAS AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            FAHMI
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">JAM AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">10.00
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">TANGGAL AKUISISI
                            </p>
                        </div>
                        <div class="col">
                            10/12/2023
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">LOKASI AKUISISI/FRED
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">DATA EXPERT 1
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">BERHASIL/GAGAL
                            </p>
                        </div>
                        <div class="col">
                            GAGAL
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">MD5
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">sadg345ftgh345g3ryhdfj76jg
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">SHA1
                            </p>
                        </div>
                        <div class="col">
                            bdfgiug398rgj0234rk29ekfo3kg039rg390hi
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">SHA256
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">
                                egse9348gjfdokgj0398ug
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">Size
                            </p>
                        </div>
                        <div class="col">
                            12456879
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fst-italic text-400 mb-0">LOKASI BARANG
                            </p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">
                                RUANG MAHABRATA
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">KETERANGAN
                            </p>
                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm ms-2"
                href="{{ route('home') }}"><span class="fas fa-check fs--2 me-1"></span>Save changes</a></div>
    </div>
@endsection
