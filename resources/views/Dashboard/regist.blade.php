@extends('Layouts.main')

@section('content')
    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="card mb-3">
                <div class="bg-holder d-none d-lg-block bg-card"
                    style="
                background-image: url(../../../assets/img/icons/spot-illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Daftar Regis</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tableExample"
                    data-list='{"valueNames":["case","lokasi","tanggal","status","progres","action","action"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="case">No.Kasus/Permohonan</th>
                                    <th class="sort" data-sort="lokasi">Lokasi Respon</th>
                                    <th class="sort" data-sort="tanggal">Tanggal Permohonan</th>
                                    <th class="sort" data-sort="status">Status</th>
                                    <th class="sort" data-sort="progres">Status Progres</th>
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="case">CASE_001_JAKARTA_10_2023</td>
                                    <td class="lokasi">Jakarta</td>
                                    <td class="tanggal">31 Oktober 2023</td>
                                    <td class="status">Diterima</td>
                                    <td class="progres">Proses Pemeriksaan</td>
                                    <td class="text-end">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="bg-white py-2"><a class="dropdown-item"
                                                        href="{{ route('detail') }}">Detail</a><a class="dropdown-item"
                                                        href="{{ route('edit_regist') }}">Edit</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="case">CASE_002_JAKARTA_10_2023</td>
                                    <td class="lokasi">Jakarta</td>
                                    <td class="tanggal">31 Oktober 2023</td>
                                    <td class="status">Diterima</td>
                                    <td class="progres">Proses Pemeriksaan</td>
                                    <td class="text-end">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="bg-white py-2"><a class="dropdown-item"
                                                        href="{{ route('detail') }}">Detail</a><a class="dropdown-item"
                                                        href="{{ route('edit_regist') }}">Edit</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="case">CASE_003_JAKARTA_10_2023</td>
                                    <td class="lokasi">Jakarta</td>
                                    <td class="tanggal">31 Oktober 2023</td>
                                    <td class="status">Diterima</td>
                                    <td class="progres">Proses Pemeriksaan</td>
                                    <td class="text-end">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="bg-white py-2"><a class="dropdown-item"
                                                        href="{{ route('detail') }}">Detail</a><a class="dropdown-item"
                                                        href="{{ route('edit_regist') }}">Edit</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="case">CASE_004_JAKARTA_10_2023</td>
                                    <td class="lokasi">Jakarta</td>
                                    <td class="tanggal">31 Oktober 2023</td>
                                    <td class="status">Diterima</td>
                                    <td class="progres">Proses Pemeriksaan</td>
                                    <td class="text-end">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"><span
                                                    class="fas fa-ellipsis-h fs--1"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="bg-white py-2"><a class="dropdown-item"
                                                        href="{{ route('detail') }}">Detail</a><a class="dropdown-item"
                                                        href="{{ route('edit_regist') }}">Edit</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="pagination d-none"></div>
                        <div class="col">
                            <p class="mb-0 fs--1">
                                <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                <span class="d-none d-sm-inline-block"> &mdash; </span>
                                <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                    class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </p>
                        </div>
                        <div class="col-auto d-flex">
                            <button class="btn btn-sm btn-primary" type="button"
                                data-list-pagination="prev"><span>Previous</span></button>
                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                data-list-pagination="next"><span>Next</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
