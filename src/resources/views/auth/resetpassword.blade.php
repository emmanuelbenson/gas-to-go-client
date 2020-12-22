@extends('layouts.auth')

@section('content')
<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="mr-lg-5">
                    <img src="{{ asset('assets/images/user/recovery.svg') }}" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card login_page shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">Recover Account</h4>

                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-muted">Please enter your phone number.</p>
                                    <div class="form-group position-relative">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                        <input type="number" class="form-control pl-5" placeholder="Enter Your Phone Number" name="phoneNumber" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-block">Send</button>
                                </div>
                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Remember your password ?</small> <a href="{{ route('signIn') }}" class="text-dark font-weight-bold">Sign in</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section>
@endsection
