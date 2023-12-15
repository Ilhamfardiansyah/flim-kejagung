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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Tampak Depan</h5>
                                    <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview1"
                                        style="width: 150px; height: 180px"
                                        src="{{ asset('assets/img/ecommerce/7.jpg') }}" />
                                    <a class="btn btn-success text-center" href="{{ asset('assets/img/ecommerce/7.jpg') }}"
                                        download>Download</a>
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
                                    <a class="btn btn-success text-center" href="{{ asset('assets/img/ecommerce/1.jpg') }}"
                                        download>Download</a>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kontainer tempat form akan ditambahkan -->
    </div>


    {{-- Script JS --}}
    <script src="{{ asset('assets/js/realtime.js') }}"></script>
    <script src="{{ asset('assets/js/multiple.select2.js') }}"></script>
@endsection
