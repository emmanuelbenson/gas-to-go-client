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
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicons.ico') }}" />
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
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- Main Css -->
    <link
      href="{{ asset('assets/css/style.css') }}"
      rel="stylesheet"
      type="text/css"
      id="theme-opt"
    />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    @livewireStyles
  </head>

  <body>
    <!-- Loader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
      <div class="container">
        <!-- Logo container-->
        <div>
          <a class="logo" href="index.html">
            <img src="{{ asset('assets/images/g2g-logo.png') }}" height="64" alt="" />
          </a>
        </div>
        <div class="buy-button">
            <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-sm btn-outline-primary">Sign In</a>
            <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-sm btn-outline-primary">Sign Out</a>
        </div>

        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>

        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a></li>
            <li><a href="index.html">How It Works</a></li>
          </ul>
            <div class="buy-menu-btn d-none">
                <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-sm btn-outline-primary">Sign In</a>
                <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-sm btn-outline-primary">Sign Out</a>
            </div>
          <!--end navigation menu-->

          <!--end login button-->
        </div>
        <!--end navigation-->
      </div>
      <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    {{ $slot }}

    @livewireScripts
    <!-- Footer Start -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
            <a href="#" class="logo-footer">
              <img src="images/g2g-logo.png" height="44" alt="" />
            </a>
            <p class="mt-4">
              Start working with Landrick that can provide everything you need
              to generate awareness, drive traffic, connect.
            </p>
            <ul class="list-unstyled social-icon social mb-0 mt-4">
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="rounded"
                  ><i data-feather="facebook" class="fea icon-sm fea-social"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="rounded"
                  ><i
                    data-feather="instagram"
                    class="fea icon-sm fea-social"
                  ></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="rounded"
                  ><i data-feather="twitter" class="fea icon-sm fea-social"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="rounded"
                  ><i data-feather="linkedin" class="fea icon-sm fea-social"></i
                ></a>
              </li>
            </ul>
            <!--end icon-->
          </div>
          <!--end col-->

          <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <h4 class="text-light footer-head">Company</h4>
            <ul class="list-unstyled footer-list mt-4">
              <li>
                <a href="page-aboutus.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> About us</a
                >
              </li>
              <li>
                <a href="page-services.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Services</a
                >
              </li>
              <li>
                <a href="page-team.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Team</a
                >
              </li>
              <li>
                <a href="page-pricing.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a
                >
              </li>
              <li>
                <a href="page-work-modern.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Project</a
                >
              </li>
              <li>
                <a href="page-jobs.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Careers</a
                >
              </li>
              <li>
                <a href="page-blog-grid.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Blog</a
                >
              </li>
              <li>
                <a href="auth-cover-login.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Login</a
                >
              </li>
            </ul>
          </div>
          <!--end col-->

          <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <h4 class="text-light footer-head">Usefull Links</h4>
            <ul class="list-unstyled footer-list mt-4">
              <li>
                <a href="page-terms.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Terms of
                  Services</a
                >
              </li>
              <li>
                <a href="page-privacy.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a
                >
              </li>
              <li>
                <a href="documentation.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a
                >
              </li>
              <li>
                <a href="changelog.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a
                >
              </li>
              <li>
                <a href="components.html" class="text-foot"
                  ><i class="mdi mdi-chevron-right mr-1"></i> Components</a
                >
              </li>
            </ul>
          </div>
          <!--end col-->

          <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <h4 class="text-light footer-head">Newsletter</h4>
            <p class="mt-4">Sign up and receive the latest tips via email.</p>
            <form>
              <div class="row">
                <div class="col-lg-12">
                  <div class="foot-subscribe form-group position-relative">
                    <label
                      >Write your email
                      <span class="text-danger">*</span></label
                    >
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    <input
                      type="email"
                      name="email"
                      id="emailsubscribe"
                      class="form-control pl-5 rounded"
                      placeholder="Your email : "
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <input
                    type="submit"
                    id="submitsubscribe"
                    name="send"
                    class="btn btn-soft-primary btn-block"
                    value="Subscribe"
                  />
                </div>
              </div>
            </form>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="text-sm-left">
              <p class="mb-0">© 2019-20 GasToGo</p>
            </div>
          </div>
          <!--end col-->

          <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <ul class="list-unstyled text-sm-right mb-0">
              <li class="list-inline-item">
                <a href="javascript:void(0)"
                  ><img
                    src="images/payments/american-ex.png"
                    class="avatar avatar-ex-sm"
                    title="American Express"
                    alt=""
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)"
                  ><img
                    src="images/payments/discover.png"
                    class="avatar avatar-ex-sm"
                    title="Discover"
                    alt=""
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)"
                  ><img
                    src="images/payments/master-card.png"
                    class="avatar avatar-ex-sm"
                    title="Master Card"
                    alt=""
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)"
                  ><img
                    src="images/payments/paypal.png"
                    class="avatar avatar-ex-sm"
                    title="Paypal"
                    alt=""
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)"
                  ><img
                    src="images/payments/visa.png"
                    class="avatar avatar-ex-sm"
                    title="Visa"
                    alt=""
                /></a>
              </li>
            </ul>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"
      ><i data-feather="arrow-up" class="icons"></i
    ></a>
    <!-- Back to top -->

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
  </body>
</html>
