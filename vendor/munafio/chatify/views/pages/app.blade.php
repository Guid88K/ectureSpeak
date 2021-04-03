@include('Chatify::layouts.headLinks')
@include('layouts.navbar')

<div class="messenger ">

    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-ad"></i> <span class="messenger-headTitle">Lecture Speak Messanger</span> </a>
                {{-- header buttons --}}

            </nav>
            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Пошук" />
            {{-- Tabs --}}
            <div class="messenger-listView-tabs">
                <a href="#" @if ($route == 'user') class="active-tab" @endif data-view="users">
                    <span class="far fa-user"></span> Люди</a>
                {{-- <a href="#" @if ($route == 'group') class="active-tab" @endif data-view="groups">
                    <span class="fas fa-users"></span> Groups</a> --}}
            </div>
        </div>
        {{-- tabs and lists --}}
        <div class="m-body">
            {{-- Lists [Users/Group] --}}
            {{-- ---------------- [ User Tab ] ---------------- --}}
            <div class="@if ($route=='user' ) show @endif messenger-tab
                app-scroll" data-view="users">

                {{-- Favorites --}}
                <p class="messenger-title">Вибрані</p>
                <div class="messenger-favorites app-scroll-thin"></div>

                {{-- Saved Messages --}}
                {!! view('Chatify::layouts.listItem', ['get' => 'saved', 'id' => $id])->render() !!}

                {{-- Contact --}}
                <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>

            </div>

            {{-- ---------------- [ Group Tab ] ---------------- --}}
          {{--   <div class="@if ($route=='group' ) show @endif messenger-tab
                app-scroll" data-view="groups"> --}}
                {{-- items --}}
                {{-- <p style="text-align: center;color:grey;">Soon will be available</p>
            </div> --}}

            {{-- ---------------- [ Search Tab ] ---------------- --}}
            <div class="messenger-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title">Пошук</p>
                <div class="search-records">
                    <p class="message-hint"><span>Напишіть для пошуку..</span></p>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-lg-5 px-md-3   px-sm-0  d-block d-sm-none ">
            <div class="container-fluid">

                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"
                        width="200px" height="50px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup1" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup1">
                    <div class="navbar-nav ms-auto">
                        <a class="nav_link px-2 my-2" aria-current="page" href="{{ url('/') }}">ГОЛОВНА</a>
                        <a class="nav_link px-2 my-2" href="{{ route('post.index') }}">МІЙ АКАУНТ</a>
                        <a class="nav_link px-2 my-2" href="{{ route('media_video.index') }}">МЕДІА-БІБЛІОТЕКА</a>
                        <a class="nav_link px-2 my-2 nav-icons active" href="{{ url('/chatify') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                            </svg></a>
                        <a class="nav-link nav-icons active dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></a>
                        <ul class="dropdown-menu dropdown-menu-end mx-3 px-1 cart-user">
                            <div class="cart-user d-flex">
                                <img src="{{ asset('uploads/' . Auth::user()->avatar) }}" width="50px" height="50px" alt=""
                                    class="rounded-circle">
                                <div class="ms-">
                                    <span><b>{{ Auth::user()->name }} </b></span>
                                    <p class="text-secondary">{{Auth::user()->category}}</p>
                                </div>
    
                            </div>
                            <a style="text-decoration:none" class="text-dark" href="{{ route('osob.index') }}">
                                <p>Особистий кабінет</p>
                            </a>
                           
    
                            <div   class="d-flex"><a style="text-decoration:none" class="text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span >Вийти </span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
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
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav>
                {{-- header back button, avatar and user name --}}
                <div style="display: inline-flex;">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    
                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                </div>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                    <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                </nav>
            </nav>
        </div>
        {{-- Internet connection --}}

        {{-- Messaging area --}}
        <div class="m-body app-scroll">
            <div class="messages">
                <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span>Будь ласка, виберіть чат, щоб розпочати спілкування</span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </p>
                </div>
            </div>
            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>
    </div>
    {{-- ---------------------- Info side ---------------------- --}}
    <div class="messenger-infoView app-scroll">
        {{-- nav actions --}}
        <nav>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>
</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
