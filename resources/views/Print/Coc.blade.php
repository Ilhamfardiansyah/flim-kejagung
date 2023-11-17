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
    style="font-family: Times New Roman, sans-serif;
font-size: 12pt;
line-height: 1.2;
margin: 0;
padding: 0;
position:relative;">

    <section class="sheet padding-10mm">
        <div style="margin:0 1rem; display: flex; justify-content: center; align-items:center">

            {{-- Kop surat --}}
            <table style="padding: 0.5rem 1rem; border:0.1px solid #000000">
                <tr>
                    <td rowspan="3" style="padding: 0.5rem 1rem; border:0.1px solid #000000; height: 3rem;">
                        <img src="{{ asset('assets/img/logos/logo-satya.png') }}" width="100">
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-center" style="height: 3rem; width: 35rem">
                        <h5>Laboratorium Digiral Forensik Kejaksaan
                            R.I
                    </td>
                </tr>
                <tr style="padding: 0.5rem 1rem; border:0.1px solid #000000; height: 3rem;">
                    <td colspan="5" class="text-center">
                        <h5><br>
                            Kontrol Pemeriksaan Barang Bukti Elektronik
                            <br>
                            Chain Of Custody (COC)

                    </td>
                </tr>
                <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                    <td style="padding: 0rem 1rem; border:0.5px solid #000000; height: 0.5rem;" class="text-center">
                        FM7.4-1</td>
                    <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;" class="text-center">
                        Edisi/Rev: 2/01, Tanggal:
                        1 Agustus 2022</td>
                    <td colspan="5" style="width: 8.5em; vertical-align: top;" class="text-center">Halaman 1 dari 1
                    </td>
                </tr>
            </table>
        </div>
        {{-- End --}}

        {{-- Container --}}
        <table style="margin: 25px; border:0.5px;">
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
        </table>

        {{-- Container --}}

        <table style="margin: 25px; border:0.5px;">
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 100%;">
                <td style="padding: 0rem 1rem; border:0.5px solid #000000; height: 2rem;">No</td>
                <td style="padding: 0.1rem 2rem; border:0.1px solid #000000; height: 1rem;">Tanggal/Jam</td>
                <td style="padding: 0.1rem 1.5rem; border:0.1px solid #000000; height: 1rem;" class="text-center">
                    Analisis</td>
                <td style="padding: 0.1rem 7rem; border:0.1px solid #000000; height: 1rem;">Tindakan</td>
                <td style="padding: 0.1rem 2rem; border:0.1px solid #000000; height: 1rem;">Paraf</td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td rowspan="50" style="padding: 0rem 1rem; border:0.5px solid #000000; height: 45rem;"></td>
                <td style="padding: 0.1rem 1.5rem; border:0.1px solid #000000; height: 45rem;"></td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 45rem;" class="text-center"></td>
                <td style="padding: 0.1rem 7rem; border:0.1px solid #000000; height: 45rem;"></td>
                <td style="padding: 0.1rem 2rem; border:0.1px solid #000000; height: 45rem;"></td>
            </tr>
        </table>
        {{-- End --}}

        <button onclick="window.print();" class="btn btn-success no-print"
            style="position: fixed; bottom:35px; right:10em;">Print</button>
        <form action="/home" method="get">
            <button class="btn btn-primary no-print" style="position: fixed; bottom:35px; right:5em;">Back</button>
        </form>

    </section>
</body>

</html>
