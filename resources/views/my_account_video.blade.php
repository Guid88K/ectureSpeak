@extends('layouts.nav')
@section('content')
    <div class="containers">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->
            @include('layouts.right_block_for_pages')






            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-10 col-sm-12 mt-md-3 mt-md-0">
                <div class="row justify-content-start">

                    <div class=" col-md-12 col-sm-12  mt-3 ">

                        <div class="d-grid gap-2">
                            <a href="{{route('video.create')}}" class="btn btn-primary rounded-pill">Додати нове відео</a>
                        </div>


                    </div>
                    @foreach ($posts as $p)
                        <div class=" col-md-4 col-sm-12  mt-3 ">
                            <div class="cart_book">
                                @isset($p->url_for_file)
                                    <div class="d-flex justify-content-center">
                                        <iframe width="100%" height="100%" src="{{ $p->url_for_file }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>

                                @endisset
                                @isset($p->file)
                                    <div class="d-flex justify-content-center">
                                        <iframe width="100%" height="100%" src="{{ 'uploads/' . $p->file }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>

                                @endisset
                                <div class="d-flex justify-content-between cart_book_text">
                                    <div> <span><b>{{$p->name_post}}</b></span><br>

                                    </div>
                                    <div class="d-flex align-items-center">
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
                    @endforeach



                    <div aria-label="Page navigation example"
                        class="mt-3 col-md-12 col-sm-12 d-flex justify-content-center">
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>

                </div>

            </div>



        </div>
    </div>
@endsection
