@extends('layouts.login')

@section('content')

<section class="login p-fixed d-flex text-center bg-success">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="login-card card-block">
                    <form class="md-float-material" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('assets_frontend/images/logo1.png') }}" alt="logo" class="img-responsive"> 
                            <h5 style="color: #333333">Dinas Perumahan dan Kawasan Permukiman<br>Kabupaten Kutai Timur</h5>
                        </div>
                        <h3 class="text-center txt-success">
                            Login
                        </h3> 
                        <div class="md-input-wrapper">
                            <input id="username" type="text" class="md-form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="md-input-wrapper">
                            <input id="password" type="password" class="md-form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                <label class="input-checkbox checkbox-success">
                                    <input type="checkbox" id="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} placeholder="Password">
                                    <span class="checkbox"></span>
                                </label>
                                <div class="captions">Remember Me</div>

                            </div>
                                </div>
                            <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forget Password?</a>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 offset-xs-1">
                                <button type="submit" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                            </div>
                        </div>
                        <!-- <div class="card-footer"> -->
                        {{-- <div class="col-sm-12 col-xs-12 text-center">
                            <span class="text-muted">Don't have an account?</span>
                            <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                        </div> --}}

                        <!-- </div> -->
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of login-card -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>


@endsection
