@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Tài khoản dành cho nhà tuyển dụng</b></p>
            </div>
            <div class="form">
                <div class="form_container">
                    <div class="form_auth active cursor">
                        <span>Đăng Nhập</span>
                    </div>
                    <div class="form_auth cursor">
                        <span>Đăng Kí</span>
                    </div>
                </div>
                <div class="form_list active">
                    <form action="{{ url('check_login') }}" method="post" id="form_check" autocomplete="off">
                        @csrf
                        <div class="form_lable"><span><b>Email</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form_input input" placeholder="Nhập địa chỉ email" name="email"
                                required> <br>
                        </div>
                        <div class="form_lable"><span><b>Mật khẩu</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form_input input" placeholder="Nhập mật khẩu" name="password"
                                required> <br>

                        </div>
                        <button type="submit" class="btn_sign input cursor">Đăng nhập</button>
                    </form>
                </div>
                <div class="form_list">
                    <form action="{{ route('dang-nhap.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form_lable"><span><b>Họ và tên</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-circle-user"></i></i></span>
                            <input type="text" class="form_input input" name="name" placeholder="Nhập tên của bạn"
                                required>
                        </div>
                        <div class="form_lable"><span><b>Email</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form_input input" name="email" placeholder="Nhập địa chỉ email"
                                required>
                        </div>
                        <div class="form_lable"><span><b>Mật khẩu</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form_input input" name="password" placeholder="Nhập mật khẩu"
                                required>

                        </div>
                        <div class="form_lable"><span><b>Nhập lại mật khẩu</b></span></div>
                        <div class="form_sign">
                            <span><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form_input input" name="password_confirm"
                                placeholder="Nhập lại mật khẩu" required>

                        </div>
                        <button type="submit" class="btn_sign input cursor">Tạo tài khoản</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
