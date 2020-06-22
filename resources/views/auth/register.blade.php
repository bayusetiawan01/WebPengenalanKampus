@extends('layouts.auth')
@section('isi')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="padding-top: 0px">
            <div class="login100-pic js-tilt regis" data-tilt style="text-align: center;">
                <img src="{{ asset('/images/desain/auth.png') }}" alt="IMG" height="300" style="margin-top: 100px;">
            </div>

            <form class="login100-form validate-form" method="post" action="/register/proc"> <span class="login100-form-title">
                    <br><br>
                    Halaman Registrasi
                </span>
                {{ csrf_field() }}
                <div class="text-center">
                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="Nama harus diisi!">
                    <input class="input100" type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="NPM harus diisi!">
                    <input class="input100" type="text" id="npm" name="npm" placeholder="NPM" value="{{ old('npm') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Email valid: ex@abc.xyz">
                    <input class="input100" type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password harus diisi!">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password harus diisi!">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Repeat Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn button_hover">
                        Register Akun
                    </button>
                </div>
                <hr>
                <div class="text-center">

                    <a class="txt2" href="\">
                        Sudah punya akun? Login!
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection