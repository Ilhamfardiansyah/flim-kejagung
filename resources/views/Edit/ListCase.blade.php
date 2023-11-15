@extends('Layouts.main')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h3 class="mb-0" data-anchor="data-anchor">
                        Edit form
                    </h3>
                    <h5 class="mb-0" data-anchor="data-anchor">
                        CASE_099_SATKER PEMOHON_10_2023
                    </h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-5d80e177-cfa7-405a-bbcf-97ada2f3d072"
                    id="dom-5d80e177-cfa7-405a-bbcf-97ada2f3d072">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nobbe">NO BBE</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="nobbe" type="text"
                                    value="DE_001_CASE_099_SATKER PEMOHON_10_2023" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="BBE">BBE</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="BBE" type="text"
                                    value="REDMI NOTE 9 WARNA HIJAU (M351236), SN : 7324TDFU356, IMEI 1 : 12345678910, IMEI 2 : 10987654321" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="dikuasai">Dikuasai Oleh</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="dikuasai" type="text" value="BAMBANG" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="disita">Disita Dari</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="disita" type="text" value="BAMBANG" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Lokasi Sita</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lokasi" type="text" value="KEJATI KOTA" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kondisi">Kondisi/Ket</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="kondisi" type="text"
                                    value="NYALA, LAYAR RETAK, SIM : 08123456789" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="jamsita">Jam Sita</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="jamsita" type="time" value="17:00" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Tanggal Sita</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lokasi" type="date" value="2023-10-10" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="respon">Petugas Respon</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="respon" type="text" value="GHIFARI" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Diterima Tanggal</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lokasi" type="date" value="2023-10-11" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="penerima">Petugas Penerima</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="penerima" type="text" value="FAHMI" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="metode">Metode</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="metode" type="text" value="UFED FILE SYSTEM" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="akuisisi">Petugas Akuisisi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="akuisisi" type="text" value="FAHMI" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="jamakuisisi">Jam Akuisisi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="jamakuisisi" type="time" value="10:00" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Tanggal Akuisisi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lokasi" type="date" value="2023-10-12" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="akuisisi">Lokasi Akuisisi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="akuisisi" type="text" value="DATA EXPERT 1" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-form-label col-sm-2 pt-0">Berhasil/Gagal</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" id="gridCheck1" type="checkbox" />
                                    <label class="form-check-label" for="gridCheck1">Berhasil</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" id="gridCheck2" type="checkbox" />
                                    <label class="form-check-label" for="gridCheck2">Gagal</label>
                                </div>
                                <script>
                                    function uncheckOther(checkbox) {
                                        var checkboxes = document.getElementsByName('status');
                                        checkboxes.forEach(function(current) {
                                            if (current !== checkbox) current.checked = false;
                                        });
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="md5">MD5</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="md5" type="text"
                                    value="sadg345ftgh345g3ryhdfj76jg" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="sha1">SHA1</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="sha1" type="text"
                                    value="bdfgiug398rgj0234rk29ekfo3kg039rg390hi" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="sha256">SHA256</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="sha256" type="text"
                                    value="egse9348gjfdokgj0398ug0e9rkg0934gj0idfjg0835jg08e8jg08dfug30i5g0fnjdvn93rugh9e8gj9u3rjhg93kg" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="size">Size</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="size" type="text" value="12456879" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Lokasi Barang</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lokasi" type="text" value="RUANG MAHABRATA" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="keterangan" type="text" />
                            </div>
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-primary" type="submit">
                            Save
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
