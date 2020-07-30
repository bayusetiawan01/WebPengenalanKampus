@extends('layouts.auth')
@section('isi')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="padding-top: 70px; padding-bottom:120px">
            <div class="login100-pic js-tilt" data-tilt style="text-align: center;">
                <img src="{{ asset('/images/desain/auth.png') }}" alt="IMG" height="300">
            </div>

            <form class="login100-form validate-form" method="post" action="/proc">
                <span class="login100-form-title">
                    Member Login <br>
                </span>
                {{ csrf_field() }}
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('gagal'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="wrap-input100">
                    <input class="input100" type="text" name="email" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection