@extends('layouts.auth')

@section('content')
<section class="bg-home d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-6">
          <div class="mr-lg-5">
            <img
              src="{{ asset('assets/images/user/login.svg') }}"
              class="img-fluid d-block mx-auto"
              alt=""
            />
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="card login-page bg-white shadow rounded border-0">
            <div class="card-body">
              <h4 class="card-title text-center">Login</h4>
              <form class="login-form mt-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group position-relative">
                      <label
                        >Your Email <span class="text-danger">*</span></label
                      >
                      <i data-feather="user" class="fea icon-sm icons"></i>
                      <input
                        type="email"
                        class="form-control pl-5"
                        placeholder="Email"
                        name="email"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group position-relative">
                      <label
                        >Password <span class="text-danger">*</span></label
                      >
                      <i data-feather="key" class="fea icon-sm icons"></i>
                      <input
                        type="password"
                        class="form-control pl-5"
                        placeholder="Password"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck1"
                          />
                          <label
                            class="custom-control-label"
                            for="customCheck1"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <p class="forgot-pass mb-0">
                        <a
                          href="/reset-password"
                          class="text-dark font-weight-bold"
                          >Forgot password ?</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-12 mb-0">
                    <button class="btn btn-primary btn-block">Sign in</button>
                  </div>

                  <div class="col-12 text-center">
                    <p class="mb-0 mt-3">
                      <small class="text-dark mr-2"
                        >Don't have an account ?</small
                      >
                      <a
                        href="{{ route('signUp') }}"
                        class="text-dark font-weight-bold"
                        >Sign Up</a
                      >
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!---->
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
@endsection
