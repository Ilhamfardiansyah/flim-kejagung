<?php
use Carbon\Carbon;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('paper.css') }}">

    <style>
        @page {
            size: F4
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
    <title>Print Data Pegawai</title>
</head>


<body class="F4"
    style="font-family: Arial, sans-serif;
font-size: 12pt;
line-height: 1.2;
margin: 0;
padding: 0;
position:relative;
">

    <section class="sheet padding-10mm">
        <table style="margin:0 1rem; display: flex; justify-content: center; align-items:center">
            <th class="container">
                <div class="row mt-3 border-bottom border-dark">
                    <div class="col-2">
                        <img class="mt-4 ms-3 float-end" src="{{ asset('assets/img/logos/logo-satya.png') }}"
                            width="80">
                    </div>
                    {{-- Kop surat --}}
                    <div class="col-10 mt-3 text-center">
                        <h2 class="fw-bold justify-content: center; align-items:center mt-3 ms-0">KEJAKSAAN REPUBLIK
                            INDONESIA</h2>
                        <h2 class="fw-bold justify-content: center; align-items:center ms-0">KEJAKSAAN AGUNG</h2>
                    </div>
                </div>
            </th>
        </table>
        <div style="display: flex; justify-content: center; align-items:center">
        </div>
        {{-- End --}}

        {{-- Body Berita Acara Akuisisi Container --}}
        {{-- <table style="margin: 25px; border:0.5px;">
            <tr style="padding: 0.1rem 1rem;; height: 100%;">
                <td style="padding: 0rem 0.5rem; width: 6.5rem;">Nama Case</td>
                <td style="padding: 0.1rem 0.1rem; height: 1rem;">:</td>
                <td style="padding: 0.1rem 0.1rem;; height: 1rem;">
                    CASE 001</td>
            </tr>
            <tr style="padding: 0.1rem 1rem;; height: 100%;">
                <td style="padding: 0rem; height: 2rem;">Nama BBE</td>
                <td style="padding: 0.1rem 0.1rem; height: 1rem;">:</td>
                <td style="padding: 0.1rem 0.1rem;; height: 1rem;">
                    REDMI NOTE 9 WARNA HIJAU (M2003), SN : 76E7CE0C0, IMEI 1 : 212345, IMEI 2 : 123456</td>
            </tr>
            <tr style="padding: 0.1rem 1rem;; height: 100%;">
                <td style="padding: 0rem 1rem; height: 2rem;">No. BBE</td>
                <td style="padding: 0.1rem 0.1rem; height: 1rem;">:</td>
                <td style="padding: 0.1rem 0.1rem; height: 1rem;">
                    DE_001_CASE_001_JAKARTA_10_2023 </td>
            </tr>
        </table> --}}

        {{-- Body Berita Acara Akuisisi Container --}}
        <td class="mt-5">
            <p class="fw-bold text-center mt-5 mb-0"><u>BERITA ACARA AKUISISI</u></p>
            <p class="text-center mb-0"> NOMOR: BA-A.001/CASE.010/JAKARTA/10/2023</p>
        </td>


        {{-- paragraph keterangan container --}}
        <div class="p-3 mt-0 mb-0">
            <div>
                <p class="p-3 mt-0 mx-3 mb-0" style="text-align: justify; word-spacing:1px">
                    <strong>--------------</strong>hari ini <strong>SENIN</strong> tanggal <strong>TIGA PULUH</strong>
                    bulan <strong>
                        JANUARI</strong> tahun <strong>DUA RIBU DUA PULUH TIGA</strong> (30-01-2023)
                    bertempat di Laboratorium Digital Forensik Kejaksaan Republik Indonesia, Jl. Mabes Hankam No 60,
                    Ceger, Cipayung,
                    Jakarta Timur, saya / kami selaku Tim Analis pada Laboratorium Digital Forensik Kejaksaan RI
                    :<strong>--------------------</strong></p>
            </div>
        </div>
        {{-- nama,pangkat,nip,jabatan --}}
        <div class="mx-auto mt-0" style="width: 70%;">
            <table class="border:1px mt-0; mb-0;">
                <tr class="padding:1rem; border:0.1px solid #000000; height: 100%;">
                    <td class="p-0.5 mt-0" style="text-align: start">Nama</td>
                    <td class="p-0.5 mt-0" style="text-align: start">:</td>
                    <td class="px-1 mt-0" style="text-align: start">YULI</td>
                </tr>
                <tr class="padding:1rem; border:0.1px solid #000000; height: 100%;">
                    <td class="p-0.5 mt-0" style="text-align: start">Pangkat / NIP</td>
                    <td class="p-0.5 mt-0" style="text-align: start">:</td>
                    <td class="px-1 mt-0" style="text-align: start">AHLI PERTAMA / 1234568910123</td>
                </tr>
                <tr class="padding: 1rem; border:0.1px solid #000000; height: 100%;">
                    <td class="p-0.5 mt-0" style="text-align: start">Jabatan</td>
                    <td class="p-0.5 mt-0" style="text-align: start">:</td>
                    <td class="px-1 mt-0" style="text-align: start">FUNGSIONAL</td>
                </tr>
            </table>
        </div>
        {{-- Container surat perintah --}}
        <div class="p-3 mt-0 mb-0">
            <p class="p-3 mt-0 mb-0 mx-3" style="text-align: justify; word-spacing: 1px;">
                <strong>------------</strong>Berdasarkan Surat Perintah Jaksa Agung Muda Intelijen Nomor : SP.OPS-
                100/D/Dti.2/00/2000
                tanggal 29 Februari 2023 perihal Permintaan Bantuan Digital Forensik
                Adhyaksa Monitoring Center (AMC) terkait Penyidikan Perkara Uang Palsu, maka telah dilakukan proses
                akuisisi digital forensik terhadap <strong>SAMSUNG GALAXY S23 (SM-1234) WARNA BIRU,
                    IMEI 1 : 123456789, IMEI 2 : 21234567, SN : QWERTY (milik BAMBANG)</strong>, menggunakan perangkat
                UFED, menghasilkan nilai hash:<strong>--------------</strong></p>
        </div>

        {{-- End --}}
        {{--  SIZE,MD5,SHA1 --}}
        <div class="mx-auto mt-0" style="width: 70%;">
            <table class="border:1px mt-0;">
                <tr class="padding:1rem; border:0.5px solid #000000; height: 100%;">
                    <td class="px-1 mt-0" style="text-align: start; justify-content:center"><strong>• Size
                            (bytes)</strong></td>
                    <td class="p-0.5 mt-0" style="text-align: start"><strong>:</strong></td>
                    <td class="px-1 mt-0" style="text-align: start"><strong>512,110,190,592 (512.1 GB)</strong></td>
                </tr>
                <tr class="padding:1rem; border:0.5px solid #000000; height: 100%;">
                    <td class="px-1 mt-0" style="text-align: start; justify-content:center"><strong>• MD5</strong></td>
                    <td class="p-0.5 mt-0" style="text-align: start"><strong>:</strong></td>
                    <td class="px-1 mt-0" style="text-align: start"><strong>ab1e2fca8132051e77acsdg25d56</strong></td>
                </tr>
                <tr class="padding: 1rem; border:0.5px solid #000000; height: 100%;">
                    <td class="px-1; mt-0" style="text-align: start; justify-content:center"><strong>• SHA</strong></td>
                    <td class="p-0.5; mt-0" style="text-align: start"><strong>:</strong></td>
                    <td class="px-1; mt-0; mb-0" style="text-align: start">
                        <strong>91c3da4f298b3cfd91a91fc1787dd342dsg54dg</strong></td>
                </tr>
            </table>
        </div>

        {{-- container end surat --}}
        <div class="p-3 mt-0">
            <p class="p-3 mt-0 mx-3 mb-0" style="text-align: justify"><strong>------------------</strong> berita acara
                ini dibuat untuk digunakan sebagaimana mestinya.<strong>-----------------</strong></p>
            <button onclick="window.print();" class="btn btn-success no-print"
                style="position: fixed; bottom:35px; right:10em;">Print</button>
            <form action="/home" method="get">
                <button class="btn btn-primary no-print" style="position: fixed; bottom:35px; right:5em;">Back</button>
            </form>

            <table style="width: 100%; margin-top: 0px; border:1px;">
                <tr style="padding: 1rem ; border: 0.1px; height: 100%;">
                    <td style="padding: 5rem ; border: 0.1px; height: 1rem;"></td>
                    <td style="padding: 5rem ; border: 0.1px; height: 1rem;"></td>
                    <td style="padding: 1rem ; border: 0.1px; height: 1rem;" class="text-center">
                        <p style="margin-bottom: 0.1rem;">Jakarta, 27 Maret 2023</p>
                        <p style="margin-bottom: 4rem">Analis</p>
                        <span class="text-decoration-underline">YULI</span>
                        <p style="margin-bottom:0%">NIP. 12345678910</p>
                    </td>
                </tr>
                <tr style="padding: 1rem; border:0.1px; height: 100%;">
                    <td style="padding: 1rem; border:1px; height: 1rem;" class="text-center">
                        <p style="margin-bottom: 4rem">Saksi I</p>
                        <span class="text-decoration-underline" style="margin-bottom: 4rem;">Siapa Aja</span>
                        <p style="margin-bottom:0%">NIP. 8975132</p>
                    </td>
                    <td style="padding: 1rem; border:1px; height: 1rem;"></td>
                    <td style="padding: 1rem; border:0.1px; height: 1rem;" class="text-center">
                        <p style="margin-top: 0%; margin-bottom: 4rem">Saksi II</p>
                        <span class="text-decoration-underline" style="margin-bottom: 4rem;">Siapa Aja</span>
                        <p style="margin-bottom:0%">NIP. 8975132</p>
                    </td>
                </tr>
            </table>
    </section>
</body>

</html>
