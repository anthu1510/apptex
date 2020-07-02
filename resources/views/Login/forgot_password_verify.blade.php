@extends('layouts.layout')

@section('title', 'Reset')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Roghini Minerva Engineers">
                                <h2 class="mt-2">Reset Password</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            @inject('errormsg', 'App\Http\Controllers\UserController')
                            {{ $errormsg->displayAlert() }}
                            <form id="pass-update" action="{{ URL::to('/newpassupdate') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Enter New Password</label>
                                    <input class="au-input au-input--full validate[required]" type="password" id="pass" name="pass" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                    <label>Enter Conform Password</label>
                                    <input class="au-input au-input--full validate[required,equals[pass]]" type="password" id="cpass" name="cpass" placeholder="Enter Conform Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
@endsection

@section('additional-js')
    <script src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
    <script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#pass-update").validationEngine();
        });
    </script>
@endsection
