@extends('layouts.web')

@section('content')
<section class="bg-half-170 d-table w-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title-heading mt-4">
            <h1 class="display-4 font-weight-bold mb-3">
              Certified vendors <br />
              for your gas
            </h1>
            <p class="para-desc text-muted">
              Launch your campaign and benefit from our expertise on designing
              and managing conversion centered bootstrap4 html page.
            </p>

            <div class="subcribe-form mt-4 pt-2">
              <form>
                <div class="form-group">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="border bg-white rounded-pill"
                    required
                    placeholder="Email Address"
                  />
                  <button type="submit" class="btn btn-pills btn-primary">
                    Get Started
                  </button>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck1"
                        />
                        <label class="custom-control-label" for="customCheck1"
                          >I Accept
                          <a href="#" class="text-primary"
                            >Terms And Condition</a
                          ></label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-md-6">
          <img src="{{ asset('assets/images/creativity.jpg') }}" width="480px" alt="" />
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end section-->
  <div class="position-relative">
    <div class="shape overflow-hidden text-light">
      <svg
        viewBox="0 0 2880 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
          fill="currentColor"
        ></path>
      </svg>
    </div>
  </div>
  <!-- Hero End -->

  <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <div class="section-title mb-4 pb-2">
            <h6 class="text-primary">Features</h6>
            <h4 class="title mb-4">Explore awesome features</h4>
            <p class="text-muted para-desc mb-0 mx-auto">
              Start working with
              <span class="text-primary font-weight-bold">GasToGo</span> that
              can provide everything you need
            </p>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->

      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-airplay"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Geolocation API</a
                >
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-clipboard-alt"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Dashboard
                </a>
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-credit-card-search"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Data Analytics</a
                >
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-ruler-combined"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Easy To Use</a
                >
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-exposure-alt"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Daily Reports</a
                >
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
          <div
            class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center"
          >
            <div class="icons rounded h2 text-center text-primary px-3">
              <i class="uil uil-clock"></i>
            </div>

            <div class="card-body p-0 content">
              <h5 class="mt-4">
                <a href="javascript:void(0)" class="title text-dark"
                  >Real Time Ordering</a
                >
              </h5>
              <p class="text-muted">
                The most well-known dummy text is the 'Lorem Ipsum', which is
                said to have originated
              </p>

              <a href="javascript:void(0)" class="text-primary"
                >Read More
                <i data-feather="chevron-right" class="fea icon-sm"></i
              ></a>
            </div>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end section-->

  <section class="section">
    <div class="container">
      <div class="card bg-light rounded border-0 overflow-hidden">
        <div class="row no-gutters align-items-center">
          <div class="col-md-6 mt-2 mt-sm-0 order-2 order-md-1">
            <div class="card-body section-title p-lg-5">
              <h2 class="mb-4 font-weight-normal">Request for gas now</h2>
              <form>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group position-relative">
                      <label>Choose Starting Point</label>
                      <i
                        data-feather="map-pin"
                        class="fea icon-sm icons text-success"
                      ></i>
                      <input
                        name="name"
                        id="location1"
                        type="text"
                        class="form-control pl-5"
                        placeholder="Choose starting point..."
                      />
                    </div>
                  </div>
                  <!--end col-->

                  <div class="col-md-12">
                    <div class="form-group position-relative">
                      <label>Choose Your Destination</label>
                      <i
                        data-feather="map-pin"
                        class="fea icon-sm icons text-danger"
                      ></i>
                      <input
                        name="name"
                        id="location2"
                        type="text"
                        class="form-control pl-5"
                        placeholder="Choose your destination..."
                      />
                    </div>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
                <a href="javascript:void(0)" class="btn btn-primary"
                  >Request Now <i class="mdi mdi-chevron-right"></i
                ></a>
              </form>
              <!--end form-->
            </div>
          </div>
          <!--end col-->

          <div class="col-md-6 order-1 order-md-2">
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                style="border: 0"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
    <!--end container-->

    <!--end container-->

    <div class="container mt-100 mt-60">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <div class="section-title mb-4 pb-2">
            <h4 class="title mb-4">What our customer says!</h4>
            <p class="text-muted para-desc mx-auto mb-0">
              Start working with
              <span class="text-primary font-weight-bold">Gas To Go</span>
              that can provide everything you need to generate awareness,
              drive traffic, connect.
            </p>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->

      <div class="row justify-content-center mt-4">
        <div class="col-lg-8 col-12">
          <div id="single-owl" class="owl-carousel owl-theme">
            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/01.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Thomas Israel
                      <small class="text-muted d-block">Driver</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " It seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->

            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/02.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Barbara McIntosh
                      <small class="text-muted d-block">User</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " This seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->

            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/03.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Christa Smith
                      <small class="text-muted d-block">Passenger</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " I seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->

            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/04.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Carl Oliver
                      <small class="text-muted d-block">Driver</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " Fully seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->

            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/05.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Jill Webb
                      <small class="text-muted d-block">Passenger</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " There seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->

            <!-- Review Start -->
            <div class="card rounded bg-light overflow-hidden border-0 m-2">
              <div class="row align-items-center no-gutters">
                <div class="col-md-5">
                  <img src="/images/client/06.jpg" class="img-fluid" alt="" />
                </div>
                <!--end col-->

                <div class="col-md-7">
                  <div class="card-body customer-testi">
                    <h6 class="text-primary font-weight-bold">
                      Dean Tolle
                      <small class="text-muted d-block">User</small>
                    </h6>
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="mdi mdi-star text-warning"></i>
                      </li>
                    </ul>
                    <p class="text-muted h6 mb-0 font-italic">
                      " It seems that only fragments of the original text
                      remain in the Ipsum texts used today. The well known
                      have originated in the 16th century. "
                    </p>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
            <!-- Review End -->
          </div>
          <!--end owl-fade-->
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="row mt-5 pt-lg-3 justify-content-center">
        <div class="col-12 text-center">
          <div class="section-title">
            <h4 class="title mb-4">Download Our App Now !</h4>
            <p class="text-muted para-desc mx-auto">
              Start working with
              <span class="text-primary font-weight-bold">Gas To Go</span>
              that can provide everything you need to generate awareness,
              drive traffic, connect.
            </p>
            <div class="mt-4">
              <form>
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input
                          name="number"
                          id="number"
                          type="number"
                          class="form-control"
                          placeholder="Your Cell Number. :"
                          required=""
                          aria-describedby="cellnumber"
                        />
                        <div class="input-group-append">
                          <button
                            class="btn btn-primary submitBnt"
                            type="submit"
                            id="cellnumber"
                          >
                            Send App Link
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </form>

              <p class="text-muted">Or</p>

              <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"
                ><i class="mdi mdi-apple"></i> App Store</a
              >
              <a
                href="javascript:void(0)"
                class="btn btn-outline-primary mt-2"
                ><i class="mdi mdi-google-play"></i> Play Store</a
              >
            </div>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end contanainer-->
  </section>

@endsection
