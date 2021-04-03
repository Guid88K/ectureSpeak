<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Lecture speak</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    <!-- My css -->
    <link rel="stylesheet" href="{{ asset('css/style.cs') }}s">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

            .osn_block_two {
                height: auto;

            }
        }

        .row {
            --bs-gutter-x: 0;
        }

        .osn_block_one {
            height: 100vh;
            background-color: white;
        }

        .osn_block_two {
            height: 100vh;
            background-color: #4860ED;
        }

    </style>




    <!-- Custom styles for this template -->

</head>

<body class="bg_autori ">

    <div class="   ">

        <div class="row">
            <div class="col-md-6 col-sm-12  osn_block_one d-flex align-items-center">

                <div class=" p-3 ">
                    <div class="container px-md-5 px-sm-0">
                        <div class="form-block mx-auto">
                            <div class=" mb-1">

                                <div class="d-flex justify-content-center  ">

                                    <h1 class="">Діліться та спілкуйся разом з “Lecture speak”</h1>

                                </div>
                                <p class="my-3 py-3 text-secondary">
                                    Налагоджуйте спілкування та співпрацю з іншими викладачами. Діліться своїми
                                    навичками та цікавою інформацією
                                </p>

                                <div class="d-flex my-3 py-3">

                                    <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1">
                                        Реєстрація
                                    </button>

                                    <button type="button" class="btn btn-outline-primary ms-5 px-4 "
                                        data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        Увійти
                                    </button>
                                </div>



                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 osn_block_two d-flex align-items-center">
                <div class="">
                    <img src="{{ asset('images/bg_auto.png') }}" alt="" width="100%" height="100%">
                </div>
            </div>



        </div>




    </div>
    <!-- Example single danger button -->

    <!-- Button trigger modal -->


    <!-- Button trigger modal -->


    <!-- Modal Реєстрація-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Зареєструватись</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
                <div class="modal-body">
                    <div class="bg-white p-3 rounded-3 py-3">
                        <div class="container">
                            <div class="form-block mx-auto">
                                <div class="text-center mb-1">
                                    <div class="d-flex justify-content-around pb-3">

                                        <a href="" class="nav-link" data-bs-dismiss="modal" aria-label="Close"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            <h6>УВІЙТИ</h6>
                                        </a>
                                        <a href="" class="nav-link" data-bs-dismiss="modal" aria-label="Close"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <h6>ЗАРЕЄСТРУВАТИСЬ</h6>
                                        </a>


                                    </div>


                                </div>

                                <form method="POST" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-primary">Імя</label>
                                        <input type="text" name="register_name" class="form-control rounded-pill @error('register_name') is-invalid
                                                                        @enderror" name="register_name"
                                            value="{{ old('register_name') }}" required autocomplete="name" autofocus>
                                        @error('register_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-primary">Email</label>
                                        <input type="email" name="register_email" class="form-control rounded-pill @error('register_email') is-invalid
                                                                        @enderror" name="register_email"
                                            value="{{ old('register_email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('register_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1"
                                            class="form-label text-primary">Пароль</label>
                                        <input type="password" class="form-control rounded-pill @error('register_password') is-invalid
                                                                        @enderror" name="register_password" required
                                            autocomplete="current-password">
                                        @error('register_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label text-primary">Повторіть
                                            пароль</label>
                                        <input id="password-confirm" type="password" class="form-control rounded-pill "
                                            name="register_password_confirmation" required autocomplete="new-password">
                                    </div>

                                    {{-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> --}}
                                    <div class="d-grid gap-2">
                                        <button type="submit"
                                            class="btn btn-danger rounded-pill">Зареєструватися</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
        
        </div> -->
            </div>
        </div>
    </div>

    <!-- Modal Авторизація-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Увійти</h5>

                </div> --}}
                <div class="modal-body">
                    <div class="bg-white p-3 rounded-3  ">
                        <div class="container">
                            <div class="form-block mx-auto">

                                {{-- <div class="d-flex justify-content-end">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div> --}}

                                <div class="text-center ">
                                    <div class="d-flex justify-content-around pb-3">
                                        <a href="" class="nav-link" data-bs-dismiss="modal" aria-label="Close"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            <h6>УВІЙТИ</h6>
                                        </a>
                                        <a href="" class="nav-link" data-bs-dismiss="modal" aria-label="Close"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <h6>ЗАРЕЄСТРУВАТИСЬ</h6>
                                        </a>

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
                                            <l_email class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1"
                                            class="form-label text-primary">Пароль</label>
                                        <input type="password" class="form-control rounded-pill @error('password') is-invalid
                                                @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2 mt-4">
                                        <button type="submit" class="btn btn-danger rounded-pill">Підтвердити</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">

                </div> --}}
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
