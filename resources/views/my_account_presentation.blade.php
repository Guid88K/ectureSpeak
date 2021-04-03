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
                            <a href="{{ route('my_presentation.create') }}" class="btn btn-primary rounded-pill">Додати
                                нову
                                презентацію</a>
                        </div>


                    </div>

                    @foreach ($posts as $p)

                        <div class=" col-md-4 col-sm-12  mt-3 ">
                            <div class="cart_book">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ 'uploads/' . $p->file }}">
                                        <img src="{{ 'uploads/' . $p->preview }}" width="100%" height="100%" alt=""></a>
                                </div>
                                <div class="d-flex justify-content-between cart_book_text">
                                    <div> <span><b>{{ $p->name_post }}</b></span><br>

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

                    {{-- <div class=" col-md-4 col-sm-12  mt-3 ">
                        <div class="cart_book">
                            <div class="d-flex justify-content-center">
                                <img src="images/photo_himia.jpg" width="100%" height="100%" alt="">
                            </div>
                            <div class="d-flex justify-content-between cart_book_text">
                                <div> <span><b>Lorem ipsum</b></span><br>

                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class=" col-md-4 col-sm-12  mt-3 ">
                        <div class="cart_book">
                            <div class="d-flex justify-content-center">
                                <img src="images/photo_himia.jpg" width="100%" height="100%" alt="">
                            </div>
                            <div class="d-flex justify-content-between cart_book_text">
                                <div> <span><b>Lorem ipsum</b></span><br>

                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class=" col-md-4 col-sm-12  mt-3 ">
                        <div class="cart_book">
                            <div class="d-flex justify-content-center">
                                <img src="images/photo_himia.jpg" width="100%" height="100%" alt="">
                            </div>
                            <div class="d-flex justify-content-between cart_book_text">
                                <div> <span><b>Lorem ipsum</b></span><br>

                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></a>
                                </div>

                            </div>
                        </div>
                    </div> --}}

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
