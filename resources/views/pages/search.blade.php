@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Tìm kiếm từ khóa : {{ $keyword }}</b></p>
            </div>
            @if ($count > 0)
                @foreach ($job as $key => $value)
                    <div class="title_list">
                        <p class="title_p"><b>{{ $value->name_job }}</b></p>
                        <p><b>YÊU CẦU CÔNG VIỆC</b></p>
                        <p>
                            {!!$value->desc!!}
                            
                        </p>
                        <ul class="title_list-desc">
                            <li><span class="icon_desc"><i class="fa-solid fa-sack-dollar"></i></span>{{ $value->price }}
                                triệu</li>
                            <li><span class="icon_desc"><i
                                        class="fa-solid fa-location-dot"></i></span>{{ $value->location->name_location }}
                            </li>
                            <li><span class="icon_desc"><i class="fa-solid fa-clock"></i></span>{{date('d-m-Y', strtotime($value->date))}}</li>
                            <li><span class="icon_desc"><i class="fa-solid fa-user"></i></span>{{ $value->quality }} người
                            </li>
                            <li><span class="icon_desc"><a
                                        href="{{ route('chi-tiet-cong-viec.show', [$value->id_job]) }}"><button
                                            class="btn_detail cursor">Chi
                                            tiết</button></a></li>
                        </ul>
                    </div>
                @endforeach
            @else
                <p style="text-align: center; margin-top: 1rem;"><b>Rất tiếc không tìm kiếm thấy kết quả</b></p>
            @endif
            

        </section>
    </div>
@endsection
