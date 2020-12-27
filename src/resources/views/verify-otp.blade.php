@extends('layouts.auth')

@section('content')
<section class="bg-home d-flex align-items-center">
    @php
        $otpData = json_decode(request()->session()->get('otpData'));
    @endphp
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">
                <div class="card login_page shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">Verify OTP</h4>
                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label> <span class="text-danger">*</span></label>
                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                        <input type="text" class="form-control pl-5" name="token" placeholder="Enter Your OTP" name="otp" required="">
                                        <input type="hidden" name="at" value="{{ !empty($otpData) ? $otpData->actionType : null }}">
                                        <input type="hidden" name="phone" value="{{ !empty($otpData) ? $otpData->phoneNumber : null }}">
                                        @csrf
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6">
                                    <div class="form-group position-relative">
                                        <small class="text-muted">Didn't get the OTP? </small>
                                        <a id="resend" href="javascript:void(0)" > Resend OTP </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button id="btnVerify" class="btn btn-primary btn-block">Verify</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--end col-->
            <div class="col-lg-3 col-md-3"></div>
        </div><!--end row-->
    </div> <!--end container-->
</section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/custom/ajaxRequest.js') }}"></script>
    <script src="{{ asset('assets/js/custom/otp.js') }}"></script>
@endpush
