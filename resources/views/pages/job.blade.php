@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Nhà tuyển dụng</b></p>
            </div>
            <div class="title_list">
                <p class="title_p"><b>Thêm công việc mới</b></p>
                <form action="{{ route('nha-tuyen-dung.store') }}" method="post" class="form_employer" autocomplete="off">
                    @csrf
                    <div class="form_lable"><span><b>Tên công việc</b></span></div>
                    <input type="text" class="input_infor" name="name_job" id="slug"
                        placeholder="Tên công việc cần tuyển dụng" onkeyup="ChangeToSlug()">
                    <input type="text" class="input_infor" name="slug_job" id="convert_slug" hidden>
                    <input type="text" class="input_infor" name="id" value="" hidden>
                    <div class="form_lable"><span><b>Số lượng</b></span></div>
                    <input type="text" class="input_infor" name="quality" placeholder="Số lượng người">
                    <div class="form_lable"><span><b>Mức lương</b></span></div>
                    <input type="text" class="input_infor" name="price" placeholder="Nhập mức lương ví dụ: 10 - 20">
                    <div class="form_lable"><span><b>Hạn ứng tuyển</b></span></div>
                    <input type="date" class="input_infor" name="date">
                    <div class="form_lable"><span><b>Nơi làm việc</b></span></div>
                    <select name="id_location" id="" class="input_infor">
                        @foreach ($location as $item => $value)
                            <option value="{{ $value->id_location }}">{{ $value->name_location }}</option>
                        @endforeach
                    </select>
                    <div class="form_lable"><span><b>Mô tả công việc</b></span></div>
                    <textarea class="input_infor" name="desc" id="" cols="30" rows="10"></textarea>
                    <div class="form_lable"><span><b>Yêu cầu ứng viên</b></span></div>
                    <textarea class="input_infor" name="skill" id="" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn_sign input cursor"><span class="padding_right"><i
                                class="fa-solid fa-paper-plane"></i></span>Đăng tuyển ngay</button>
                </form>
                <a href=""><button class="btn_sign input cursor"><span
                            class="padding_right"><i class="fa-solid fa-users-viewfinder"></i></span>Việc đã đăng & danh
                        sách ứng
                        viên
                </button></a>

            </div>

        </section>
    </div>
@endsection
