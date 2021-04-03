@extends('layouts.nav')
@section('content')
    <div class="containers">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->
            @include('layouts.right_block_for_pages')






            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-10 col-sm-12 ">

                <div class="d-grid gap-2 mt-3">
                    <a href="{{ route('post.create') }}" class="btn btn-primary rounded-pill">Додати нову публікацію</a>
                </div>
                @foreach ($posts as $p)
                    @isset($p->url_for_file)
                        <div class="cart_new p-3 blok_two mt-md-3 mt-md-0">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 ">

                                    <div class="d-flex">



                                        <img src="{{ asset('uploads/' . App\Models\User::find($p->user_id)->avatar) }}" alt=""

                                            class="rounded-circle border border-secondary " width="50px" height="50px">

                                        <div class="mx-1">
                                            <div> <b class="text-primary">{{App\Models\User::find($p->user_id)->name }}
                                                {{App\Models\User::find($p->user_id)->surname }}
                                            </b> 
                                       
                                            <span class="text-secondary">{{ $p->category_post }}</span></div>
                                            
                                    
                                            <span class="text-secondary">{{ $p->created_at }}</span>

                                        </div>



                                    </div>
                                    <div class="mt-2">
                                        <b>   {{ $p->name_post }}</b>
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
                                            

                                                    <form action="{{ route('post.destroy', $p->id) }}" method="POST"
                                                        id="delete_post_{{ $p->id }}">

                                                        @csrf

                                                        @method('DELETE')

                                                        <a
                                                            onclick="document.getElementById('delete_post_{{ $p->id }}').submit();">

                                                            <img src="{{asset('images/delete.png')}}" alt="" width="20px" height="25px">

                                                        </a>
                                                    </form>

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

                    @if (is_null($p->url_for_file))

                        <div class="cart_new p-3 blok_two mt-5">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">

                                    <div class="d-flex">



                                        <img src="{{ asset('uploads/' . App\Models\User::find($p->user_id)->avatar) }}" alt=""

                                            class="rounded-circle border border-secondary " width="50px" height="50px">

                                        <div class="mx-1">
                                            <div> <b class="text-primary">{{App\Models\User::find($p->user_id)->name }}
                                                {{App\Models\User::find($p->user_id)->surname }}
                                            </b> 
                                       
                                            <span class="text-secondary">{{ $p->category_post }}</span></div>
                                            
                                    
                                            <span class="text-secondary">{{ $p->created_at }}</span>

                                        </div>



                                    </div>
                                    <div class="mt-2">
                                        <b>   {{ $p->name_post }}</b>
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
                                                

                                                        <form action="{{ route('post.destroy', $p->id) }}" method="POST"
                                                            id="delete_post_{{ $p->id }}">

                                                            @csrf

                                                            @method('DELETE')

                                                            <a
                                                                onclick="document.getElementById('delete_post_{{ $p->id }}').submit();">

                                                                <img src="{{asset('images/delete.png')}}" alt="" width="20px" height="25px">

                                                            </a>
                                                        </form>

                                                </div>
                                            </div>
                                        
                                        </div>

                                </div>

                                <div class="col-md-12 col-sm-12 pt-3">


                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach
                <!-- ---------------------------Pagination start----------------------------------- -->

                <div aria-label="Page navigation example" class="mt-3 col-md-12 col-sm-12 d-flex justify-content-center">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>

                <!-- ---------------------------Pagination start----------------------------------- -->


            </div>






            <!-- blok_three------------------------------------------------------------- -->

        </div>
    </div>
@endsection
