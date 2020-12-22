@extends('layouts.auth')

@section('content')
<section class="bg-half-170 d-table w-100">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 offset-lg-1 col-md-6 order-2 order-md-1">
                <div class="title-heading mt-4">
                    <h1 class="display-4 font-weight-normal mb-3">Unbeatable Price & Expert Services</h1>
                    <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="bg-white shadow rounded position-relative overflow-hidden">
                    <div class="text-center">
                        <ul class="nav nav-pills nav-justified flex-sm-row mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link py-2 active rounded-0" id="customer" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title font-weight-normal mb-0 acc" data-choice="cm">Customer</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item">
                                <a class="nav-link py-2 rounded-0" id="vendor" data-toggle="pill" href="javascript:void(0)" role="tab" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title font-weight-normal mb-0 acc" data-choice="vd">Vendor</h4>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        @csrf
                        <div class="card border-0 tab-pane fade show active">
                            <form class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <input class="form-contorl" type="hidden" value="cm" name="account">
                                            <label>First name <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5 form-input" placeholder="First Name" name="firstName" required="">
                                            <div id="first_name" class="text-danger"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Last name <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control pl-5 form-input" placeholder="Last Name" name="lastName" required="">
                                            <div id="last_name" class="text-danger"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Phone Number <span class="text-danger">*</span></label>
                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                            <input type="number" class="form-control pl-5 form-input" placeholder="Phone Number" name="phoneNumber" required="">
                                            <div id="phone_number" class="text-danger"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email </label>
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control pl-5 form-input" placeholder="Email" name="email" >
                                            <div id="email" class="text-danger"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5 form-input" placeholder="Password" name="password" required="">
                                            <div id="password" class="text-danger"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5 form-input" placeholder="confirm Password" name="password_confirmation" required="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input form-input" id="user-check" name="terms_and_condition">
                                                <label class="custom-control-label" for="user-check">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                <div id="first_name" class="text-danger"></div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <button id="btnSignUp" class="btn btn-success w-100">Sign Up</button>
                                    </div><!--end col-->
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3">
                                          <small class="text-dark mr-2"
                                            >Already have an account ?</small
                                          >
                                        <a
                                            href="/sign-in"
                                            class="text-dark font-weight-bold"
                                            >Sign in</a
                                          >
                                        </p>
                                    </div>
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div>
            </div><!--end col-->


        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/custom/auth.js') }}"></script>
    <script src="{{ asset('assets/js/custom/ajaxRequest.js') }}"></script>
    <script>

    </script>
@endpush
