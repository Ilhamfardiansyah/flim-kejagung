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
                    <td colspan="3" class="text-center" style="height: 3rem; width: 35rem">
                        <h5>Laboratorium Digiral Forensik Kejaksaan
                            R.I
                    </td>
                </tr>
                <tr style="padding: 0.5rem 1rem; border:0.1px solid #000000; height: 3rem;">
                    <td colspan="3" class="text-center">
                        <h5><b>
                                Registrasi Penerimaan Barang Bukti Elektronik
                    </td>
                </tr>
                <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                    <td style="padding: 0rem 1rem; border:0.5px solid #000000; height: 0.5rem;" class="text-center">
                        FM7.4-1</td>
                    <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;" class="text-center">
                        Edisi/Rev: 2/01, Tanggal:
                        1 Agustus 2022</td>
                    <td colspan="3" style="width: 8.5em; vertical-align: top;" class="text-center">Halaman 1 dari 1
                    </td>
                </tr>
            </table>
        </div>
        {{-- End --}}

        {{-- Container --}}
        <table style="margin: 25px; border:0.5px;">
            <tr>
                <td style="width: 0.1em; vertical-align: top; height: 1px"><b>A.</td>
                <td style="width: 20em; vertical-align: top;"><b>Informasi Permohonan</td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0rem 1rem; border:0.5px solid #000000; height: 0.5rem;">1</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Nama Kasus</td>
                <td style="width: 35em; vertical-align: top;">Misal ada isinya</td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">2</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Jenis BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">3</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Spesifikasi BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">4</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Pemilik BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">5</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">IMEI/Serial Number</td>
                <td style="width: 35em; vertical-align: top;">IMEI 1 :
                    <br>
                    <br>
                    IMEI 2 :
                    <br>
                    <br>
                    S/N :
                    <br>
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">6</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Parameter Security</td>
                <td style="width: 35em; vertical-align: top;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">7</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Kondisi Ketika Diterima
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">8</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Waktu Diterima</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr>
                <td colspan="3"><b>B. Verifikasi Permohonan
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">9</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Nama Pemohon</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">10</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">NIP/NRP</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">11</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Jabatan</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr>
                <td colspan="3"><b>C. Ketersediaan Peralatan Digital Forensik, Metode Pemeriksaan, dan Sumber Daya
                        Manusia
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">12</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Peralatan Digital Forensik
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">13</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Metode Dan Prosedur
                    Pemeriksaan
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">14</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">Teknik Pemeriksa
                    Pemeriksaan
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">15</td>
                <td style="padding: 0.1rem 0.1rem; border:0.1px solid #000000; height: 1rem;">SDM Yang Kompeten
                    Pemeriksaan
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr>
                <td colspan="2"><b>D. Tindak
                        Lanjut
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 3rem;">
                <td colspan="2" style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">SDM Yang
                    Kompeten
                    Pemeriksaan
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
        </table>
        {{-- End --}}

        {{-- Footer --}}
        <table style="margin: 25px; border:0.5px;">
            <br>
            <br>
            <br>
            <div style="margin:0 2rem; display: flex; justify-content: end;">
                Jakarta, {{ Carbon::now()->format('j F Y') }}
            </div>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 5rem; border:0.5px solid #ffffff; height: 1rem;"></td>
                <td style="padding: 0.1rem 0.01rem; border:0.1px solid #000000; height: 1rem;"></td>
                <td style="padding: 0.1rem 3rem; border:0.1px solid #000000; height: 1rem;">Pemohonan</td>
                <td style="padding: 0.1rem 3rem; border:0.1px solid #000000; height: 1rem;" class="text-center">
                    Tanggapan Respon</td>
                <td style="width: 35em; vertical-align: top;" class="text-center">Mengetahui, Kepala Laboratorium</td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 5rem; border:0.5px solid #ffffff; height: 6rem;"></td>
                <td style="padding: 0.1rem 0.01rem; border:0.1px solid #000000; height: 1rem;"></td>
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;"></td>
                <td style="padding: 0.1rem 1rem; border:0.1px solid #000000; height: 1rem;">
                </td>
                <td style="width: 35em; vertical-align: top;"></td>
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
