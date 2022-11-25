
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

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
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{url('assets/backend/css/theme.min.css')}}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{url('assets/backend/css/user.min.css')}}" type="text/css" rel="stylesheet" id="user-style-default">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->


    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <x-partials.backend.sidebar/>


        <x-partials.backend.navbar/>


        <div class="content">

          <div class="d-flex flex-center content-min-h">

        {{ $slot }}
          </div>

        </div>
        <x-partials.backend.footer/>

      </div>
    </main>
    <script src="{{url('assets/backend/js/popper.min.js')}}"></script>
    <script src="{{url('assets/backend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/backend/js/anchor.min.js')}}"></script>
    <script src="{{url('assets/backend/js/is.min.js')}}"></script>
    <script src="{{url('assets/backend/js/all.min.js')}}"></script>
    <script src="{{url('assets/backend/js/lodash.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{url('assets/backend/js/list.min.js')}}"></script>
    <script src="{{url('assets/backend/js/feather.min.js')}}"></script>
    <script src="{{url('assets/backend/js/dayjs.min.js')}}"></script>
    <script src="{{url('assets/backend/js/phoenix.js')}}"></script>
  </body>

</html>
