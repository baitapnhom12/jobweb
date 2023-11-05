<h1>dashboard</h1>
list role
@foreach ($role as $val)
    <a href="{{Route('role.show',[$val->id])}}">{{$val->name}}</a><br>
@endforeach