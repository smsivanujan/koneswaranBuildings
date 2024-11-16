<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Koneswaran Engineering">
    <meta name="author" content="Sobiztech (Pvt) Ltd">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    @include('layouts.components.styles')

</head>

<body class="ltr app horizontal landing-page">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('layouts.components.header')

            @include('layouts.components.sidebar')

            <!--app-content open-->
            <div class="hor-content main-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container">

                        @yield('content')

                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>

        @yield('modal')

        @include('layouts.components.footer')

    </div>
    <!-- page -->

    @include('layouts.components.scripts')

</body>

</html>