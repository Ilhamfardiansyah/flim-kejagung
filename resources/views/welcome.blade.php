    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>FLIMS | Forensic Lab Information Management System</title>
        <meta content="" name="description">
        <meta content="" name="keywords"><!DOCTYPE html>
        <html lang="en-US" dir="ltr">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <!-- ===============================================-->
            <!--    Document Title-->
            <!-- ===============================================-->
            <title>FLIMS &amp; Forensic Lab Information Management System</title>


            <!-- ===============================================-->
            <!--    Favicons-->
            <!-- ===============================================-->
            <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
            <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
            <link rel="manifest" href="../assets/img/favicons/manifest.json">
            <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
            <meta name="theme-color" content="#ffffff">
            <script src="../assets/js/config.js"></script>
            <script src="../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


            <!-- ===============================================-->
            <!--    Stylesheets-->
            <!-- ===============================================-->
            <link href="../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
            <link href="../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
            <link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
            <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
            <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
            <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
            <script>
            var isRTL = JSON.parse(localStorage.getItem('isRTL'));
            if (isRTL) {
                var linkDefault = document.getElementById('style-default');
                var userLinkDefault = document.getElementById('user-style-default');
                linkDefault.setAttribute('disabled', true);
                userLinkDefault.setAttribute('disabled', true);
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                var linkRTL = document.getElementById('style-rtl');
                var userLinkRTL = document.getElementById('user-style-rtl');
                linkRTL.setAttribute('disabled', true);
                userLinkRTL.setAttribute('disabled', true);
            }
            </script>
        </head>


        <body>

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 overflow-hidden light" id="banner">

                <div class="bg-holder overlay" style="background-image:url(../assets/img/generic/bg-1.jpg);background-position: center bottom;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                <div class="row flex-center pt-8 pt-lg-10 pb-lg-9 pb-xl-0">
                    <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">
                    <h1 class="text-white fw-light">FLIMS</h1>
                    <p class="lead text-white opacity-75">LIMS adalah aplikasi untuk mengelola aliran sampel dan data barang bukti laboratorium forensik. LIMS membantu menstandarkan alur kerja, pengujian dan prosedur, serta memberikan kontrol proses yang akurat.</p>
@auth
<a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="/login">Home<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
@else
<a class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="/login">Login<span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span></a>
@endauth
                    </div>
                    <div class="col-xl-6 offset-xl-1 mt-4 mt-xl-0.10"><a class="img-landing-banner" href="../index.html"><img class="img-fluid" src="../assets/img/generic/logo-flims.png" alt="" /></a></div>
                </div>
                </div>
                <!-- end of .container-->

            </section>

            <section class="py-3 bg-light shadow-sm">

                <div class="container">
                <div class="row flex-center">
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="../assets/img/logos/b&amp;w/cellebrite.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="../assets/img/logos/b&amp;w/magnet.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="../assets/img/logos/b&amp;w/oxygen.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="../assets/img/logos/b&amp;w/hancom.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="35" src="../assets/img/logos/b&amp;w/detego.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="../assets/img/logos/b&amp;w/five.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="30" src="../assets/img/logos/b&amp;w/kinesense.png" alt="" /></div>
                    <div class="col-3 col-sm-auto my-1 my-sm-3 px-card"><img class="landing-cta-img" height="40" src="../assets/img/logos/b&amp;w/phonexia.png" alt="" /></div>
                </div>
                </div>
                <!-- end of .container-->

            </section>

            </main>


