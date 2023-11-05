@extends('layout')
@section('content')
<div class="sidebar_left">
    <section>
      <div class="title_left title">
        <p><b>Danh sách ứng viên ứng tuyển</b></p>
      </div>
      
      <div class="title_list">
        <table class="customer">
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>CV</th>
            <th>Thao tác</th>
          </tr>
          @foreach ($customer as $key => $value)
              @php
                  $key++;
              @endphp
          <tr>
            <td>{{$key}}</td>
            <td>{{$value->name_customer}}</td>
            <td><a href="{{asset('pdf/'.$value->file_customer)}}"><button type="submit" class="btn_sign input cursor"><span class="padding_right"><i class="fa-solid fa-download"></i></span>Tải xuống</button></a></td>
            <td>
              <form action="{{route('danh-sach-ung-vien.destroy',[$value->id_customer])}}" method="post">
                @method('delete')
                @csrf
              <button type="submit" class="btn_sign input cursor"><span class="padding_right"><i class="fa-solid fa-trash-can"></i></span>Xóa</button>
              </form>
            </td>
          </td>
          </tr>
          @endforeach
          
        </table>
      </div>
    </section>
  </div>
@endsection
