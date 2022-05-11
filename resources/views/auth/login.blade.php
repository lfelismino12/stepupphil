@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card m-4">
                <img src="https://www.worldvision.org.ph/wp-content/uploads/2020/05/10-1-768x576.jpg" class="card-img-top" alt="World Vision"/>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/National_Nutrition_Council_%28NNC%29.svg/1200px-National_Nutrition_Council_%28NNC%29.svg.png" style="width:70%" alt="nnc logo"/>
                        </div>
                        <div class="col-9">
                            <h5 class="card-title">STEP UP: Sustainable Transactions for Emergency Preparedness and Urgent Priority</h5>
                        </div>
                    </div>
                                        
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password input-->
                        <div class="form-outline mb-4">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-2">
                            <div class="col d-flex justify-content-center">
                                <!-- checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col sm-4">
                                <!--simple link-->
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                        <!-- submit button -->
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </form>
                    <br></br>
                    <div>No account yet? <span><a href= "/register">Register here</a><span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
