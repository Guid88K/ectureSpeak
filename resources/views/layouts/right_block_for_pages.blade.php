<div class="col-md-2 col-sm-12 blok_one mt-md-5 mt-sm-0">
    <ul>
        <li><a href="{{route('post.index')}}">Мої публікації</a></li>
        <li><a href="{{route('my_book.index')}}">Мої книги</a></li>
        <li><a href="{{route('video.index')}}">Мої відео</a></li>
        <li><a href="{{route('my_presentation.index')}}">Мої презентації</a></li>
        <li><a href="{{route('my_likes.index')}}">Мої вподобання</a></li>
        <li><a href="{{url('/chatify')}}">Сповіщення </a><sup class="text-primary"> <b>@php
            $user_count_message = Chatify\Http\Models\Message::where('to_id',Auth::user()->id)->where('seen',0)->count();
           
        @endphp
       {{--  {!! $unseenCounter > 0 ? '<b>' . $unseenCounter . '</b>' : '' !!} --}}
       {{$user_count_message}}</b></sup></li>


    </ul>


</div>