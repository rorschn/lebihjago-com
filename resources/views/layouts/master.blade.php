<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>@yield('title') - LebihJago.com</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="{{ asset('manifest.json') }}" />
    

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/img/favicon180.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/img/favicon32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/img/favicon16.png') }}" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="{{ asset('/vendor/swiperjs-6.6.2/swiper-bundle.min.css') }}">

    <!-- style css for this template -->
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="@yield('data-type')">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{asset('/img/logo.png')}}" alt="Logo">
                </div>
                <p class="mt-4">I'm more 'jago' than the Jago Bank! Bitcoin = the best investment.</p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->


    <!-- Begin page -->
    <main class="h-100">

        @yield('content')

    </main>
    <!-- Page ends-->

    <!-- Footer
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-laptop"></i>
                            <span class="nav-text">Statistics</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <div class="nav-link">
                        <span class="theme-radial-gradient">
                            <i class="close bi bi-x"></i>
                            <img src="{{asset('/img/ayamjago/lightning.svg')}}" class="nav-icon" alt="" />
                        </span>
                        <div class="nav-menu-popover justify-content-between">
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('pay.html');">
                                <i class="bi bi-credit-card size-32"></i><span>Pay</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('sendmoney.html');">
                                <i class="bi bi-arrow-up-right-circle size-32"></i><span>Send</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('bills.html');">
                                <i class="bi bi-receipt size-32"></i><span>Bills</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('receivemoney.html');">
                                <i class="bi bi-arrow-down-left-circle size-32"></i><span>Receive</span>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rewards.html">
                        <span>
                            <i class="nav-icon bi bi-gift"></i>
                            <span class="nav-text">Rewards</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wallet.html">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Wallet</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    Footer ends-->

    <!-- Required jquery and libraries -->
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>

    <!-- cookie js -->
    <script src="{{asset('/js/jquery.cookie.js')}}"></script>

    <!-- Customized jquery file  -->
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/color-scheme.js')}}"></script>

    <!-- PWA app service registration and works -->
    <script src="{{asset('/js/pwa-services.js')}}"></script>

    <!-- Chart js script -->
    <script src="{{asset('/vendor/chart-js-3.3.1/chart.min.js')}}"></script>

    <!-- Progress circle js script -->
    <script src="{{asset('/vendor/progressbar-js/progressbar.min.js')}}"></script>

    <!-- swiper js script -->
    <script src="{{asset('/vendor/swiperjs-6.6.2/swiper-bundle.min.js')}}"></script>

    <!-- page level custom script -->
    <script src="{{asset('/js/app.js')}}"></script>

    @yield('javascript')

</body>


</html>