@extends('layouts.nav')
@section('content')
    <div class="containers">
        <div class="row">
            <!-- blok_one------------------------------------------------------ -->
            @include('layouts.right_block_for_pages')






            <!-- blok_two------------------------------------------------------ -->
            <div class="col-md-10 col-sm-12 mt-md-3 mt-md-0">
                <div class="row justify-content-start">


                    <div class=" col-md-12 col-sm-12  mt-1 ">

                        <div class="d-grid gap-2">
                            <a href="{{ route('my_book.create') }}" class="btn btn-primary rounded-pill">Додати нову
                                книгу</a>
                        </div>


                    </div>

                    @foreach ($posts as $p)
                        <div class=" col-md-4 col-sm-12  mt-md-3 mt-sm-0 ">
                            <div class="cart_book">
                                <div class="d-flex  justify-content-center">
                                    <a href="{{ 'uploads/' . $p->file }}">

                                        <img src="{{ 'uploads/' . $p->preview }}" alt="" width="200px" height="300px"></a>
                                </div>
                                <div class="d-flex justify-content-around cart_book_text">
                                    <div> <span><b>{{ $p->name_post }}</b></span><br>
                                        <span>{{ $p->category_post }}</span>
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


                   

                    <!-- ---------------------------Pagination start----------------------------------- -->

                    <div aria-label="Page navigation example"
                        class="mt-3 col-md-12 col-sm-12 d-flex justify-content-center">
                        {{$posts->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
