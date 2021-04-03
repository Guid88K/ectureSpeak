<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>lectureSpeak</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    <!-- My css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

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
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-lg-5 px-md-3  px-sm-0  ">
                <div class="container-fluid">

                    <a class="navbar-brand" href="{{url('/main')}}"><img src="{{asset('images/logo.png')}}" width="200px" height="50px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav_link px-2 my-2" aria-current="page" href="{{url('/main')}}">ГОЛОВНА</a>
                            <a class="nav_link px-2 my-2" href="{{route("post.index")}}">МІЙ АКАУНТ</a>
                            <a class="nav_link px-2 my-2" href="{{route('media_video.index')}}">МЕДІА-БІБЛІОТЕКА</a>
                          
                            <a class="nav_link px-2 my-2 nav-icons " href="{{ url('/chatify') }}">
                          
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                </svg><small> 
                                    @php
                                        $user_count_message = Chatify\Http\Models\Message::where('to_id',Auth::user()->id)->where('seen',0)->count();
                                       
                                    @endphp
                                   {{--  {!! $unseenCounter > 0 ? '<b>' . $unseenCounter . '</b>' : '' !!} --}}
                                   {{$user_count_message}}
                                </small></a>
                            <a class="nav_link px-2 my-2 nav-icons  dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></a>
                            <ul class="dropdown-menu dropdown-menu-end mx-3 px-4 cart-user">
                                <div class="cart-user d-flex">
                                    <img src="{{asset('uploads/' . Auth::user()->avatar)}}" width="50px" height="50px" alt=""
                                        class="rounded-circle ">
                                    <div class="ms-3">
                                        <span><b>{{ Auth::user()->name }} </b></span>
                                        <p class="text_silver">{{Auth::user()->category}}</p>
                                    </div>

                                </div>
                                <a href="{{route('osob.index')}}">
                                    <p  class="mt-3">Особистий кабінет</p>
                                </a>
                               {{--  <a href="#">
                                    <p>Мої завантаження</p>
                                </a> --}}

                                <div class="d-flex pb-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span>Вийти </span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg></a></div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>


        </header>

        <main class="content">
            @yield('content')
        </main>

        <footer>
            <div class="footer d-flex justify-content-center mt-5">
                <span>2021 © lecture Speak. Все права защищены</span>
            </div>

        </footer>

    </div>
    <!-- Example single danger button -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->



    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>
