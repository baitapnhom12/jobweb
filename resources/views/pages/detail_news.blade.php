@extends('layout')
@section('content')
<div class="sidebar_left">
    <section>
      <div class="title_left title">
        <p><b>Chi tiết tin tức mới</b></p>
      </div>
      <div class="title_list">
        <p class="title_p"><b>{{$news->name_news}}</b></p>
        <p>{!!$news->desc_news!!}</p>
      </div>
    </section>
  </div>
@endsection
