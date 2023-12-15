<?php
use Carbon\Carbon;
?>
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
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">Nama BBE</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3" />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">No. BBE</span>
                        <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3" />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Tampak Depan</h5>
                                    <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview1"
                                        style="width: 150px; height: 180px"
                                        src="{{ asset('assets/img/ecommerce/7.jpg') }}" />
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Tampak Belakang</h5>
                                    <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview2"
                                        style="width: 150px; height: 180px"
                                        src="{{ asset('assets/img/ecommerce/1.jpg') }}" />
                                    <br />
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
                                <h3>Tindakan</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Tindakan 01</h3>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group"><span class="input-group-text">Tanggal Tindakan</span>
                        <input class="form-control" type="date" />

                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group"><span class="input-group-text">Jam Tindakan</span>
                        <input class="form-control" type="time" />

                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group"><span class="input-group-text">Nama Analis</span>
                        <select class="form-select" id="bulanSelect" aria-label="Default select example">
                            <option selected>Pilih Analis</option>
                            <option>User 01</option>
                            <option>User 02</option>
                            <option>User 03</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-form-name">Tindakan</label>
                    <textarea class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" style="height: 50%"> </textarea>
                </div>
            </div>
        </div>

        <!-- Kontainer tempat form akan ditambahkan -->
        <div id="kontainerForm"></div>

        <button id="tambahFormButton" class="btn btn-primary">Tambah Tanggal Tindakan</button>
        <a href="{{ route('print_coc') }}" class="btn btn-success">Save</a>

        <script>
            $(document).ready(function() {
                var counter = 02;
                // Menggunakan event click pada tombol "Tambah Form"
                $('#tambahFormButton').click(function() {

                    var nomor = counter++;
                    // Menambahkan elemen form ke dalam kontainerForm
                    $('#kontainerForm').append(
                        '<div class="card mb-3">' +
                        '<div class="card-body">' +
                        // batas
                        '<div class="row">' +
                        '<div class="card-body position-relative">' +
                        '<div class="row">' +
                        '<div class="col-lg-8">' +
                        '<h3>' + 'Tindakan ' + '0' + nomor + '</h3>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        // batas
                        '<div class="mb-3">' +
                        '<div class="input-group"><span class="input-group-text">Tanggal Tindakan</span>' +
                        '<input id="tanggalInput" class="form-control" type="date" />' +
                        '</div>' +
                        // batas
                        '<br>' +
                        '<div class="mb-3">' +
                        '<div class="input-group"><span class="input-group-text">Jam Tindakan</span>' +
                        '<input id="jamInput" class="form-control" type="time" />' +
                        '</div>' +
                        // batas
                        '<br>' +
                        '<div class="mb-3">' +
                        '<div class="input-group"><span class="input-group-text">Nama Analis</span>' +
                        '<select class="form-select" id="bulanSelect" aria-label="Default select example">' +
                        '<option selected>Pilih Analis</option>' +
                        '<option>User 01</option>' +
                        '<option>User 02</option>' +
                        '<option>User 03</option>' +
                        '</select>' +
                        '</div>' +
                        // batas
                        '<div class="mb-3">' +
                        '<label class="form-label" for="basic-form-name">Tindakan</label>' +
                        '<textarea class="form-control" id="basic-form-name" type="text" placeholder="No. BBE" style="height: 50%"> </textarea>' +
                        '</div>' +
                        // batas
                        '</div>' +
                        '</div>'
                    );
                });
            });
        </script>
    </div>


    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
