@extends('layouts.nav')
@section('content')
    <div class="containers">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->

            <div class="col-md-12 col-sm-12 blok_one mt-md-5 mt-sm-0">

                <div class="row">
                    @include('layouts.video_presentation_book')

                    <div class="col-md-4 col-sm-12">
                        <div class="border border-primary rounded-pill px-3">
                            <form action="{{route('search_by_name_video')}}" class="d-flex border-0 ">
                                <input class="form-control border-0 " name="name" type="search" placeholder="Пошук" aria-label="Search">
                                <button class="btn " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg></button>
                                <hr>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
            <!-- ---------------------------------------------------------------- -->

            <div class="col-md-12 col-sm-12 blok_one mt-5 ">

                <div class="col-md-12 col-sm-12 blok_one mt-5 ">
                    <div class="row">
    
    
                        <div class="col-md-7 col-sm-12">
                    
                            
                            <div class="d-flex justify-content-around">
                                <div class="card_predmet text-center">
                        
                                    <a href="{{route( 'category_search_video' , 'Історія')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/History.png')}}" alt="" width="56px" height="56px"></div>
                                        <div>історія</div>
                                    </a>
                                </div>
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Хімія')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/chemistry.png')}}" alt="" width="56px" height="56px"></div>
                                        <div>хімія</div>
                                    </a>
                                </div>
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Математика')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/Mathematics.png')}}" alt="" width="56px" height="56px">
                                        </div>
                                        <div>математика</div>
                                    </a>
                                </div>
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Географія')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/geogafic.png')}}" alt="" width="56px" height="56px"></div>
                                        <div>географія</div>
                                    </a>
                                </div>
                            </div>
                    
                    
                        </div>
                    
                    
                        <div class="col-md-5 col-sm-12">
                    
                    
                            <div class="d-flex justify-content-around">
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Фізика')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/physics.png')}}" alt="" width="56px" height="56px"></div>
                                        <div>фізика</div>
                                    </a>
                                </div>
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Біологія')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/biologia.png')}}" alt="" width="56px" height="56px"></div>
                                        <div>біологія</div>
                                    </a>
                                </div>
                                <div class="card_predmet text-center">
                                    <a href="{{route('category_search_video','Мистецтво')}}">
                                        <div class="d-flex justify-content-center"><img src="{{asset('images/art.png')}}" alt=""width="56px" height="56px">
                                        </div>
                                        <div>мистецтво</div>
                                    </a>
                                </div>
                    
                            </div>
                        </div>
                    
                    
                    </div>
                </div>


            </div>








            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-12 col-sm-12 mt-md-3 mt-md-0">
                <div class="row justify-content-start">
                    @foreach ($posts as $p)
                        <div class=" col-md-4 col-sm-12  mt-3 ">
                            <div class="cart_book">
                                <div class="d-flex justify-content-center">
                                    <iframe width="100%" height="100%" src="{{$p->url_for_file}}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="d-flex justify-content-between cart_book_text">
                                    <div> <span><b>{{$p->name_post}}</b></span><br>

                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach

                    


                    <!-- ---------------------------Pagination start----------------------------------- -->

                    <div aria-label="Page navigation example"
                        class="mt-3 col-md-12 col-sm-12 d-flex justify-content-center">
                       {{ $posts->links('pagination::bootstrap-4') }}
                    </div>

                    <!-- ---------------------------Pagination start----------------------------------- -->



                </div>

            </div>






            <!-- blok_three------------------------------------------------------------- -->
            <!-- <div class="col-md-1 col-sm-12 blok_three mt-5"> -->



        </div>
    </div>
@endsection
