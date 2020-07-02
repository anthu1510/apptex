@extends('layouts.layout')

@section('title', 'Check')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Roghini Minerva Engineers">
                                <h2 class="mt-2">Forgot Password check</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            @inject('errormsg', 'App\Http\Controllers\UserController')
                            {{ $errormsg->displayAlert() }}
                            <form action="{{ URL::to('/resetcodecheck') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Enter the Reset Code</label>
                                    <input class="au-input au-input--full" type="text" name="reset_code" placeholder="Enter the Reset Code">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Verify</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
