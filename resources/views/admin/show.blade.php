create role and permission <br>
role
{{$role->name}}
<form action="{{Route('role.show',[$role->id])}}" method="post">
@method('put')
@csrf
@foreach ($permis as $val)
    <input @foreach ($all_permis as $permis)
        @if ($val->id==$permis->id)
            {{'checked'}}
        @endif
    @endforeach value="{{$val->name}}" type="checkbox" name="permission[]" id="">{{$val->name}} <br>
@endforeach
<button type="submit">create role and permission</button>
</form>