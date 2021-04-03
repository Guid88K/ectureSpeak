@extends('layouts.nav')

@section('content')

    <div class="containers">

        <div class="row">

            <!-- blok_one------------------------------------------------------ -->

            <div class="col-md-2 col-sm-12  d-none d-sm-block">

                @include('layouts.calendar')

            </div>



            <div class="col-md-1 col-sm-12  d-none d-sm-block">



            </div>

            <!-- blok_two------------------------------------------------------ -->

            <div class="col-md-9 col-sm-12 ">



                @foreach ($posts as $p)

                    @isset($p->url_for_file)





                        <div class="cart_new p-3 blok_two mt-5">

                            <div class="row">

                                <div class="col-md-4 col-sm-12 ">



                                    <div class="d-flex">



                                        <img src="{{ asset('uploads/' . App\Models\User::find($p->user_id)->avatar) }}" alt=""
                                            class="rounded-circle border border-secondary " width="50px" height="50px">

                                        <div class="mx-1">
                                            <div> <b class="text-primary">{{ App\Models\User::find($p->user_id)->name }}
                                                    {{ App\Models\User::find($p->user_id)->surname }}
                                                </b>
                                                
                                                <span class="text-secondary">{{ $p->category_post }}</span>
                                            </div>


                                            <span class="text-secondary">{{ $p->created_at }}</span>

                                        </div>



                                    </div>
                                    <div class="mt-2">
                                        <b> {{ $p->name_post }}</b>
                                    </div>


                                    <div class="cart_text">

                                        {{ $p->content_post }}

                                    </div>



                                    <div class="col-md-12 col-sm-12">
                                        <div class="d-flex mt-3 ">

                                            <div class="me-2">
                                                <form id="like_main_page_{{ $p->id }}"
                                                    action="{{ url('like/store/' . $p->id . '/' . Auth::user()->id) }}"
                                                    method="POST">
    
                                                    @csrf
    
                                                    <a onclick="document.getElementById('like_main_page_{{ $p->id }}').submit();"
                                                        href="#" class="">
    
                                                        @php
                                                            
                                                            $counter = 0;
                                                            
                                                        @endphp
    
                                                        @foreach ($like as $l)
    
                                                            @if ($l->post_id == $p->id)
                                                                @php
                                                                    
                                                                    $counter++;
                                                                    
                                                                @endphp
    
                                                            @endif
                                                        @endforeach
                                                        @php
                                                            $check_like = \App\Models\Like::where(['user_id' => Auth::user()->id])
                                                            
                                                                ->where(['post_id' => $p->id])
                                                            
                                                                ->first();
                                                        @endphp
                                                        @if ($check_like == null)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                                                fill="currentColor" class="bi bi-suit-heart like_hover like_icon"
                                                                viewBox="0 0 16 16">
    
                                                                <path
                                                                    d="M8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
    
                                                            </svg>
                                                        @endif
                                                        @foreach ($your_likes as $yl)
                                                            @if ($yl->user_id == Auth::user()->id && $yl->post_id == $p->id)
                                                                <img src="{{ asset('images/heart.png') }}" alt="" width="25px"
                                                                    height="25px" class="bi bi-suit-heart like_hover like_icon">
                                                            @endif
                                                        @endforeach
                                                        <span class="text-dark">{{ $counter }}</span>
    
                                                    </a>
                                                </form>


                                            </div>

                                            <div class="me-2"><a href="{{ route('post.show', $p->id) }}" class="">
                                                    <img src="{{asset('images/coments.png')}}" alt="" width="25px" height="25px">

                                                </a>

                                                <div>

                                                </div>
                                            </div>

                                            <div class="me-2">
                                                @if (Auth::user()->is_admin == 1)

                                              

                                                    <form action="{{ route('post.destroy', $p->id) }}" method="POST"
                                                        id="delete_post_{{ $p->id }}">

                                                        @csrf

                                                        @method('DELETE')

                                                        <a
                                                            onclick="document.getElementById('delete_post_{{ $p->id }}').submit();">

                                                            <img src="{{asset('images/delete.png')}}" alt="" width="20px" height="25px">

                                                        </a>
                                                    </form>


                                            @endif
                                            

                                              
                                            </div>
                                        </div>
                                       
                                    </div>

                                </div>



                                <div class="col-md-8 col-sm-12">

                                    <iframe width="100%" height="100%" src="{{ $p->url_for_file }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>



                            </div>

                        </div>

                    @endisset

                    @if ($p->url_for_file == null)

                        <div class="cart_new p-3 blok_two mt-5">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 ">



                                    <div class="d-flex">



                                        <img src="{{ asset('uploads/' . App\Models\User::find($p->user_id)->avatar) }}"
                                            alt="" class="rounded-circle border border-secondary " width="50px"
                                            height="50px">

                                        <div class="mx-1">
                                            <div> <b class="text-primary">{{ App\Models\User::find($p->user_id)->name }}
                                                    {{ App\Models\User::find($p->user_id)->surname }}
                                                </b>
                                              
                                                <span class="text-secondary">{{ $p->category_post }}</span>
                                            </div>


                                            <span class="text-secondary">{{ $p->created_at }}</span>

                                        </div>



                                    </div>
                                    <div class="mt-2">
                                        <b> {{ $p->name_post }}</b>
                                    </div>


                                    <div class="cart_text">

                                        {{ $p->content_post }}

                                    </div>



                                    <div class="col-md-12 col-sm-12">
                                        <div class="d-flex mt-3 ">

                                            <div class="me-2">
                                                <form id="like_main_page_{{ $p->id }}"
                                                    action="{{ url('like/store/' . $p->id . '/' . Auth::user()->id) }}"
                                                    method="POST">
    
                                                    @csrf
    
                                                    <a onclick="document.getElementById('like_main_page_{{ $p->id }}').submit();"
                                                        href="#" class="">
    
                                                        @php
                                                            
                                                            $counter = 0;
                                                            
                                                        @endphp
    
                                                        @foreach ($like as $l)
    
                                                            @if ($l->post_id == $p->id)
                                                                @php
                                                                    
                                                                    $counter++;
                                                                    
                                                                @endphp
    
                                                            @endif
                                                        @endforeach
                                                        @php
                                                            $check_like = \App\Models\Like::where(['user_id' => Auth::user()->id])
                                                            
                                                                ->where(['post_id' => $p->id])
                                                            
                                                                ->first();
                                                        @endphp
                                                        @if ($check_like == null)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                                                fill="currentColor" class="bi bi-suit-heart like_hover like_icon"
                                                                viewBox="0 0 16 16">
    
                                                                <path
                                                                    d="M8 6.236l-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
    
                                                            </svg>
                                                        @endif
                                                        @foreach ($your_likes as $yl)
                                                            @if ($yl->user_id == Auth::user()->id && $yl->post_id == $p->id)
                                                                <img src="{{ asset('images/heart.png') }}" alt="" width="25px"
                                                                    height="25px" class="bi bi-suit-heart like_hover like_icon">
                                                            @endif
                                                        @endforeach
                                                        <span class="text-dark">{{ $counter }}</span>
    
                                                    </a>
                                                </form>


                                            </div>

                                            <div class="me-2"><a href="{{ route('post.show', $p->id) }}" class="">
                                                    <img src="{{asset('images/coments.png')}}" alt="" width="25px" height="25px">

                                                </a>

                                                <div>

                                                </div>
                                            </div>

                                            <div class="me-2">
                                                @if (Auth::user()->is_admin == 1)

                                              

                                                    <form action="{{ route('post.destroy', $p->id) }}" method="POST"
                                                        id="delete_post_{{ $p->id }}">

                                                        @csrf

                                                        @method('DELETE')

                                                        <a
                                                            onclick="document.getElementById('delete_post_{{ $p->id }}').submit();">

                                                            <img src="{{asset('images/delete.png')}}" alt="" width="20px" height="25px">

                                                        </a>
                                                    </form>


                                            @endif
                                            

                                              
                                            </div>
                                        </div>
                                       
                                    </div>

                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach



                <div aria-label="Page navigation example" class="mt-3 col-md-12 col-sm-12 d-flex justify-content-center">

                    {{ $posts->links('pagination::bootstrap-4') }}



                </div>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var today = new Date(),

                year = today.getFullYear(),

                month = today.getMonth(),

                monthTag = ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень",
                    "Вересень", "Жовтень", "Листопад", "Грудень"
                ],

                day = today.getDate(),

                days = document.getElementsByTagName('td'),

                selectedDay,

                setDate,

                daysLen = days.length;

            // options should like '2014-01-01'

            function Calendar(selector, options) {

                this.options = options;

                this.draw();

            }

            Calendar.prototype.draw = function() {

                this.getCookie('selected_day');

                this.getOptions();

                this.drawDays();

                var that = this,

                    reset = document.getElementById('reset'),

                    pre = document.getElementsByClassName('pre-button'),

                    next = document.getElementsByClassName('next-button');

                pre[0].addEventListener('click', function() {

                    that.preMonth();

                });

                next[0].addEventListener('click', function() {

                    that.nextMonth();

                });

                reset.addEventListener('click', function() {

                    that.reset();

                });

                while (daysLen--) {

                    days[daysLen].addEventListener('click', function() {

                        that.clickDay(this);

                    });

                }

            };

            Calendar.prototype.drawHeader = function(e) {

                var headDay = document.getElementsByClassName('head-day'),

                    headMonth = document.getElementsByClassName('head-month');

                e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;

                headMonth[0].innerHTML = monthTag[month] + " - " + year;

            };

            Calendar.prototype.drawDays = function() {

                var startDay = new Date(year, month, 1).getDay(),

                    nDays = new Date(year, month + 1, 0).getDate(),

                    n = startDay;

                for (var k = 0; k < 42; k++) {

                    days[k].innerHTML = '';

                    days[k].id = '';

                    days[k].className = '';

                }

                for (var i = 1; i <= nDays; i++) {

                    days[n].innerHTML = i;

                    n++;

                }

                for (var j = 0; j < 42; j++) {

                    if (days[j].innerHTML === "") {

                        days[j].id = "disabled";

                    } else if (j === day + startDay - 1) {

                        if ((this.options && (month === setDate.getMonth()) && (year === setDate

                                .getFullYear())) || (!this.options && (month === today.getMonth()) && (

                                year === today.getFullYear()))) {

                            this.drawHeader(day);

                            days[j].id = "today";

                        }

                    }

                    if (selectedDay) {

                        if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay

                                .getMonth()) && (year === selectedDay.getFullYear())) {

                            days[j].className = "selected";

                            this.drawHeader(selectedDay.getDate());

                        }

                    }

                }

            };

            Calendar.prototype.clickDay = function(o) {

                var selected = document.getElementsByClassName("selected"),

                    len = selected.length;

                if (len !== 0) {

                    selected[0].className = "";

                }

                o.className = "selected";

                selectedDay = new Date(year, month, o.innerHTML);

                this.drawHeader(o.innerHTML);

                this.setCookie('selected_day', 1);

            };

            Calendar.prototype.preMonth = function() {

                if (month < 1) {

                    month = 11;

                    year = year - 1;

                } else {

                    month = month - 1;

                }

                this.drawHeader(1);

                this.drawDays();

            };

            Calendar.prototype.nextMonth = function() {

                if (month >= 11) {

                    month = 0;

                    year = year + 1;

                } else {

                    month = month + 1;

                }

                this.drawHeader(1);

                this.drawDays();

            };

            Calendar.prototype.getOptions = function() {

                if (this.options) {

                    var sets = this.options.split('-');

                    setDate = new Date(sets[0], sets[1] - 1, sets[2]);

                    day = setDate.getDate();

                    year = setDate.getFullYear();

                    month = setDate.getMonth();

                }

            };

            Calendar.prototype.reset = function() {

                month = today.getMonth();

                year = today.getFullYear();

                day = today.getDate();

                this.options = undefined;

                this.drawDays();

            };

            Calendar.prototype.setCookie = function(name, expiredays) {

                if (expiredays) {

                    var date = new Date();

                    date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));

                    var expires = "; expires=" + date.toGMTString();

                } else {

                    var expires = "";

                }

                document.cookie = name + "=" + selectedDay + expires + "; path=/";

            };

            Calendar.prototype.getCookie = function(name) {

                if (document.cookie.length) {

                    var arrCookie = document.cookie.split(';'),

                        nameEQ = name + "=";

                    for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {

                        var c = arrCookie[i];

                        while (c.charAt(0) == ' ') {

                            c = c.substring(1, c.length);

                        }

                        if (c.indexOf(nameEQ) === 0) {

                            selectedDay = new Date(c.substring(nameEQ.length, c.length));

                        }

                    }

                }

            };

            var calendar = new Calendar();

        }, false);

    </script>

@endsection
