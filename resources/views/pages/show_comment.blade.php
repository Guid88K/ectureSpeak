@extends('layouts.nav')
@section('content')
    <div class="containers">
        <div class="row pt-2">
            <!-- blok_one------------------------------------------------------ -->
            @isset($post->url_for_file)
                <div class="col-md-6 col-sm-12">
                    <div>
                        <iframe width="100%" height="400px" src="{{ $post->url_for_file }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                </div>

            @endisset
            @if (is_null($post->url_for_file))
                <div class="col-md-12 col-sm-12  ">
                @else
                    <div class="col-md-6 col-sm-12  ">
            @endif
            <div class="ms-md-4 ms-md-0">
                <h1>{{ $post->name_post }}</h1>
                <span>{{ $post->content_post }}</span>
            </div>

        </div>





        <div class="col-md-12 col-sm-12 my-4">
            <form action="{{ route('comment.store', $post->id) }}">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body_for_comment"
                        placeholder="Додати коментар ..." rows="3"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary rounded-pill">Додати коментар</button>
                </div>

            </form>
        </div>
        <!-- --------------------------------------------------------------- -->
        @foreach ($comments as $c)
            <div class="col-md-12 col-sm-12 ">
                <div class="cart_new p-3 blok_two mt-3">
                    <div class="row">



                        <div class="col-md-12 col-sm-12 ">

                            <div class="d-flex">
                                @foreach ($user as $u)
                                    @if ($u->id == $c->user_id)
                                        <img src="{{ asset('uploads/' . $u->avatar) }}" alt=""
                                            class="rounded-circle border border-secondary " width="50px" height="50px">
                                        <div class="mx-1">
                                            <div>

                                                <b>{{ $u->name }}</b>

                                            </div>
                                            
                                            <br>
                                            <span>{{ $c->created_at }}</span>
                                        </div>
                                        
                                    @endif

                                @endforeach

                            </div>

                            <div class="cart_text">
                                {{ $c->body_for_comment }}
                            </div>

                            @if ($post->user_id == Auth::user()->id || $c->user_id == Auth::user()->id)


                            <div class="div">
                                <div class="col-md-12 col-sm-12 ">

                                    <div class="d-flex justify-content-end">

                                        <form action="{{ route('comment.delete', $c->id) }}" method="POST"
                                            id="delete_comment_{{ $c->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <a
                                                onclick="document.getElementById('delete_comment_{{ $c->id }}').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px"
                                                    height="25px" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                        </div>

                    </div>

                </div>
            </div>
        @endforeach
        <!-- --------------------------------------------------------------- -->

        {{-- <div class="col-md-12 col-sm-12 ">
                <div class="cart_new p-3 blok_two mt-3">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">

                            <div class="d-flex">
                                <img src="images/users.png" alt="" class="rounded-circle border border-secondary "
                                    width="50px" height="50px">
                                <div class="mx-1">
                                    <div> <b>Loream ipsum</b> </div>
                                    <span class="text_silver">dolor sit amet</span><br>
                                    <span>10:25 AM</span>
                                </div>

                            </div>

                            <div class="cart_text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure itaque inventore maiores,
                                ipsam corrupti
                                non quis quaerat! Beatae quidem, ullam quae voluptate illum deserunt esse suscipit
                                laboriosam, animi,
                                dicta nisi?
                            </div>


                        </div>

                    </div>

                </div>
            </div>
            <!-- --------------------------------------------------------------- -->

            <div class="col-md-12 col-sm-12 ">
                <div class="cart_new p-3 blok_two mt-3">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">

                            <div class="d-flex">
                                <img src="images/users.png" alt="" class="rounded-circle border border-secondary "
                                    width="50px" height="50px">
                                <div class="mx-1">
                                    <div> <b>Loream ipsum</b> </div>
                                    <span class="text_silver">dolor sit amet</span><br>
                                    <span>10:25 AM</span>
                                </div>

                            </div>

                            <div class="cart_text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure itaque inventore maiores,
                                ipsam corrupti
                                non quis quaerat! Beatae quidem, ullam quae voluptate illum deserunt esse suscipit
                                laboriosam, animi,
                                dicta nisi?
                            </div>


                        </div>

                    </div>

                </div>
            </div> --}}
        <!-- --------------------------------------------------------------- -->




    </div>
    </div>
@endsection
