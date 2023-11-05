@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Tin tức mới nhất</b></p>
            </div>
            @foreach ($news as $key => $value)
                
            <div class="title_list">
                <a href="{{route('tin-tuc.show',[$value->id_news])}}" class="news_link">
                    <div class="news">
                        <div class="news_image">
                            <img src="{{asset('image/'.$value->img_news)}}" alt="" class="img_news">
                        </div>
                        <div class="news-content">
                            <p class="title_p"><b>{{$value->name_news}}</b></p>
                            <p class="news_desc">
                                {!!Str::limit($value->desc_news,'251','...')!!}
                            </p>
                        </div>
                    </div>
                </a>


            </div>
            @endforeach
        </section>
    </div>
@endsection
