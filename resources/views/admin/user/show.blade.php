<h1>Show User</h1>
<form action="{{url('insert_roleuser',[$user->id])}}" method="post">
    @csrf
@foreach ($role as $val)
    <input {{($val->id==$all_role->id)?'checked':''}} value="{{$val->name}}" type="radio" name="role" id="">{{$val->name}}
@endforeach
<button type="submit">them role user</button>
</form>