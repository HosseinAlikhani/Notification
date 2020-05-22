@extends('auth.layouts')
@section('content')
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{ route('login.request') }}">
                @csrf
					<span class="login100-form-title p-b-34">
						Account Login
					</span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

                    <a href="#" class="txt2">
                        User name / password?
                    </a>
                </div>

                <div class="w-full text-center">
                    <a href="#" class="txt3">
                        Sign Up
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('src/login/images/bg-01.jpg');"></div>
        </div>
    </div>
@endsection