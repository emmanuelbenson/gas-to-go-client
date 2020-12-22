<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Gas To Go - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Premium Bootstrap 4 Landing Page Template"
    />
    <meta
      name="keywords"
      content="Saas, Software, multi-uses, HTML, Clean, Modern"
    />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://www.shreethemes.in" />
    <meta name="Version" content="v2.5.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link
      href="{{ asset('assets/css/materialdesignicons.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"
    />
    <!-- Main Css -->
    <link
      href="{{ asset('assets/css/style.css') }}"
      rel="stylesheet"
      type="text/css"
      id="theme-opt"
    />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    @yield('css')
  </head>

  <body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <div class="back-to-home rounded d-none d-sm-block">
      <a href="/" class="btn btn-icon btn-soft-primary"
        ><i data-feather="home" class="icons"></i
      ></a>
    </div>

    <!-- Hero Start -->
    @yield('content')
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
  <!-- SLIDER -->
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.init.js') }}"></script>
  <!-- Icons -->
  <script src="{{ asset('assets/js/feather.min.js') }}"></script>
  <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
  <!-- Main Js -->
  <script src="{{ asset('assets/js/app.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
  </script>
  @stack('scripts')
    <!-- Main Js -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script>

        @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch(type){
            case 'info':
                toastr.options.timeOut = 10000;
                toastr.info("{{Session::get('message')}}");
                break;

            case 'success':
                toastr.options.timeOut = 10000;
                toastr.success("{{Session::get('message')}}");
                break;

            case 'warning':
                toastr.options.timeOut = 10000;
                toastr.warning("{{Session::get('message')}}");
                break;

            case 'error':
                toastr.options.timeOut = 10000;
                toastr.error("{{Session::get('message')}}");
                break;
        }
        @endif
</script>

  </body>
</html>
