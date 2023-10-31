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


<body class="A4"
    style="font-family: Times New Roman, sans-serif;
font-size: 12pt;
line-height: 1.5;
margin: 0;
padding: 0;
position:relative;">

    <section class="sheet padding-10mm">
        <div style="margin:0 1rem; display: flex; justify-content: center; align-items:center">

            <table style="padding: 0.5rem 1rem; border:1px solid #000000">
                <tr>
                    <td rowspan="3" style="padding: 0.5rem 1rem; border:1px solid #000000; height: 3rem;">
                        <img src="{{ asset('assets/img/logos/logo-satya.png') }}" width="100">
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="height: 3rem; width: 35rem">
                        <h5>Laboratorium Digiral Forensik Kejaksaan
                            R.I
                    </td>
                </tr>
                <tr style="padding: 0.5rem 1rem; border:1px solid #000000; height: 3rem;">
                    <td class="text-center">
                        <h5><b>
                                Registrasi Penerimaan Barang Bukti Elektronik
                    </td>
                </tr>
                <tr style="padding: 0.5rem 0.5rem; border:1px solid #000000; height: 0.5rem;">
                    <td rowspan="3" style="border: 1px solid #000000;">
                        <h6 class="text-center">FM7.4-1
                    </td>
                    <td colspan="3" style="border: 1px solid #000000;">
                        <h6 class="text-center">FM7.4-1
                    </td>

                </tr>
            </table>
        </div>

        <table style="margin: 25px; border:0.5px;">
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">1</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Nama Kasus</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">2</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Jenis BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">3</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Spesifikasi BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">4</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Pemilik BBE</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">5</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">IMEI/Serial Number</td>
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
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">6</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Parameter Security</td>
                <td style="width: 35em; vertical-align: top;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">7</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Kondisi Ketika Diterima</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">8</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Waktu Diterima</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>

            <tr>
                <td style="width: 1em; vertical-align: top; height: 2px"><b>B.</td>
                <td style="width: 20em; vertical-align: top;"><b>Verifikasi Permohonan</td>
            </tr>

            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">9</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Nama Pemohon</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">10</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">NIP/NRP</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
            <tr style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">11</td>
                <td style="padding: 0.1rem 1rem; border:1px solid #000000; height: 1rem;">Jabatan</td>
                <td style="width: 35em; vertical-align: top;"></td>
            </tr>
        </table>

        <button onclick="window.print();" class="btn btn-success no-print"
            style="position: fixed; bottom:35px; right:10em;">Print</button>
        <form action="/home" method="get">
            <button class="btn btn-primary no-print" style="position: fixed; bottom:35px; right:5em;">Back</button>
        </form>

    </section>
</body>

</html>
