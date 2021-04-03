@extends('auth.layouts')

@section('content')
  <script>window.location = "/";</script>
    <div class="col-md-6 col-sm-12 mt-3 ">
        <div class="bg-white p-3 rounded-3 width_75 py-5">
            <div class="container">
                <div class="form-block mx-auto">
                    <div class="text-center mb-1">
                        <div class="d-flex justify-content-around pb-3">

                            <a href="{{ url('login') }}" class="nav-link"> <b>Увійти</b> </a>
                            <a href="{{ url('register') }}" class="nav-link"><b>Зареєструватись</b> </a>

                        </div>


                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-primary">Email</label>
                            <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid
                                            @enderror" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-primary">Пароль</label>
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid
                                            @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-danger rounded-pill">Підтвердити</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    {{-- <div class="col-md-6 col-sm-12 mt-3 ">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

@endsection
