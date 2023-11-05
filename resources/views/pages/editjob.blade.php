@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Sửa công việc đã đăng</b></p>
            </div>
            <div class="title_list">
                <p class="title_p"><b>Thêm công việc mới</b></p>
                <form action="{{ route('nha-tuyen-dung.update',[$job->id_job]) }}" method="post" class="form_employer" autocomplete="off">
                    @method('put')
                    @csrf
                    <div class="form_lable"><span><b>Tên công việc</b></span></div>
                    <input type="text" class="input_infor" name="name_job" id="slug"
                        value="{{$job->name_job}}" onkeyup="ChangeToSlug()">
                    <input type="text" class="input_infor" name="slug_job" id="convert_slug" value="{{$job->slug_job}}" hidden>
                    <input type="text" class="input_infor" name="id" value="{{ Auth::user()->id }}" hidden>
                    <div class="form_lable"><span><b>Số lượng</b></span></div>
                    <input type="text" class="input_infor" name="quality" value="{{$job->quality}}">
                    <div class="form_lable"><span><b>Mức lương</b></span></div>
                    <input type="text" class="input_infor" name="price" value="{{$job->price}}">
                    <div class="form_lable"><span><b>Hạn ứng tuyển</b></span></div>
                    <input type="date" class="input_infor" name="date" value="{{$job->date}}">
                    <div class="form_lable"><span><b>Nơi làm việc</b></span></div>
                    <select name="id_location" id="" class="input_infor">
                        @foreach ($location as $item => $value)
                           
                            <option @if ($value->id_location==$job->id_location)
                                {{'selected'}}
                            @else
                                {{''}}
                            @endif 
                            value="{{$value->id_location}}">{{$value->name_location}}</option>
                        @endforeach
                    </select>
                    <div class="form_lable"><span><b>Mô tả công việc</b></span></div>
                    <textarea class="input_infor" name="desc" id="" cols="30" rows="10">{{$job->desc}}</textarea>
                    <div class="form_lable"><span><b>Yêu cầu ứng viên</b></span></div>
                    <textarea class="input_infor" name="skill" id="" cols="30" rows="10">{{$job->skill}}</textarea>
                    <button type="submit" class="btn_sign input cursor"><span class="padding_right"><i
                                class="fa-solid fa-paper-plane"></i></span>Cập nhật công việc</button>
                </form>
            </div>

        </section>
    </div>
@endsection
