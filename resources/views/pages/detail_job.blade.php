@extends('layout')
@section('content')
<div class="sidebar_left">
    <section>
        <div class="title_left title">
            <p><b>Chi tiết việc làm</b></p>
        </div>
        <div class="title_list">
    <p class="title_p"><b>{{$job->name_job}}</b></p>
            <p><b>MÔ TẢ CÔNG VIỆC</b></p>
            <p>
                {!!$job->desc!!}
            <p class="title_margin"><b>YÊU CẦU ỨNG VIÊN</b></p>
            {!!$job->skill!!}
            <ul class="title_list-desc">
                <li><span class="icon_desc"><i class="fa-solid fa-sack-dollar"></i></span>{{$job->price}} triệu</li>
                <li><span class="icon_desc"><i class="fa-solid fa-location-dot"></i></span>{{$job->location->name_location}}</li>
                <li><span class="icon_desc"><i class="fa-solid fa-clock"></i></span>{{date('d-m-Y', strtotime($job->date))}}</li>
                <li><span class="icon_desc"><i class="fa-solid fa-user"></i></span>{{$job->quality}} người</li>
                <li><span class="icon_desc"><a><button class="btn_detail cursor on_form">Ứng tuyển</button></a></li>
            </ul>
        </div>

    </section>
</div>
<div class="overlay_job none">
    <div class="apply">
        <form action="{{route('chi-tiet-cong-viec.store')}}" class="form_apply" id="checkform" method="post" enctype="multipart/form-data">
           
            @csrf
            <div class="form_lable"><span><b>Họ và tên</b></span></div>
            <input type="text" class="input_infor" name="name_customer" placeholder="Nhập tên của bạn">
            <div class="form_lable"><span><b>Email</b></span></div>
            <input type="text" class="input_infor" name="email_customer" placeholder="Nhập email của bạn">
            <div class="form_lable"><span><b>Số điện thoại</b></span></div>
            <input type="text" class="input_infor" name="phone_customer" placeholder="Nhập số điện thoại">
            <div class="form_lable"><span><b>CV của bạn</b></span></div>
            <input type="file" class="input_infor" accept="application/pdf" id="file_input" hidden name="file_customer">
            <label for="file_input" class="lable_file">
                <div class="file_container">
                    <div class="file_list cursor">
                        <span class="padding_right"><i class="fa-solid fa-file-pdf"></i></span>
                        <span id="file_name">Tải CV</span>
                    </div>
                </div>
            </label>
            <input type="text" class="input_infor" name="id_job" value="{{$job->id_job}}" hidden>
            <button type="submit" class="btn_sign input cursor"><span class="padding_right"><i class="fa-solid fa-paper-plane"></i></span>Gửi ngay</button>
        </form>

    </div>
    
        <div class="close cursor closeform"><i class="fa-regular fa-circle-xmark"></i></div>
</div>
@endsection

