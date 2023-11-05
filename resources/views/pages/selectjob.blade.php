@extends('layout')
@section('content')
    <div class="sidebar_left">
        <section>
            <div class="title_left title">
                <p><b>Danh sách việc đã đăng tuyển</b></p>
            </div>

            <div class="title_list">
                <table class="customer">
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ứng viên</th>
                        <th colspan="2">Thao tác</th>
                    </tr>

                    @foreach ($selectjob as $key => $value)
                        @php
                            $key++;
                        @endphp
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $value->name_job }}</td>
                            <td><a href="{{route('danh-sach-ung-vien.show',[$value->id_job])}}"><button class="btn_sign input cursor"><span class="padding_right"><i
                                                class="fa-solid fa-eye"></i></span>Xem</button></a></td>
                            <td><a href="{{route('nha-tuyen-dung.edit',[$value->id_job])}}"><button class="btn_sign input cursor"><span class="padding_right"><i
                              class="fa-solid fa-user-pen"></i></span>Sửa</button></a></td>
                            <td>
                                <form action="{{route('nha-tuyen-dung.destroy',[$value->id_job])}}" method="post"><button class="btn_sign input cursor">
                                  @method('delete')
                                  @csrf
                                  <span class="padding_right"><i class="fa-solid fa-trash-can"></i></span>Xóa</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
