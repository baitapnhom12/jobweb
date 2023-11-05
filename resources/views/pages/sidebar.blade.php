
<div class="sidebar_right">
    <aside>
        <div class="title_left title">
            <p><b>Việc làm theo tỉnh</b></p>
        </div>
        @foreach ($location as $item => $value)
        <a href="{{route('dia-diem.show',[$value->id_location])}}">
            <div class="location">
                <p><span><i class="fa-solid fa-flag"></i></span>{{$value->name_location}}</p>
            </div>
        </a>
        @endforeach
        
        <div class="img_location">
            <img src="{{asset('image/sidebar1.jpg')}}" alt="">
        </div>
        <div class="img_location">
            <img src="{{asset('image/sidebar2.jpg')}}" alt="">
        </div>
        <div class="img_location">
            <img src="{{asset('image/sidebar3.jpg')}}" alt="">
        </div>
        <div class="img_location">
            <img src="{{asset('image/sidebar4.jpg')}}" alt="">
        </div>

    </aside>
</div>