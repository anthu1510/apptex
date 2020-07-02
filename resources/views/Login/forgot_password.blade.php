@extends('layouts.layout')

@section('title', 'Forgot')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Roghini Minerva Engineers">
                                <h2 class="mt-2">Forgot Password</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            @inject('errormsg', 'App\Http\Controllers\UserController')
                            {{ $errormsg->displayAlert() }}
                            <form action="{{ URL::to('/forgotcheck') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
