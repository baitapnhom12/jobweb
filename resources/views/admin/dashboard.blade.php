<h1>dashboard</h1>
acount:
{{Auth::user()->id}}
@role('admins')
    I am a admins!
@else
    I am not a admins...
@endrole

<a href="{{url('log_out')}}">ĐĂNG XUẤT</a>
<a href="{{url('role')}}">Role</a>
<a href="{{url('user')}}">user</a>
