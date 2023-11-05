<h1>User</h1>
<table>
    <th>
        name
    </th>
    <th>role</th>
    <th>permissions</th>
    <th>phan quyen</th>
    @foreach ($user as $val)  
    <tr>
        <td>{{$val->name}}</td>
        <td>@foreach ($val->roles as $role)
            {{$role->name}}
        @endforeach</td>
        <td>@foreach ($role->permissions as $permission)
            {{$permission->name}}
        @endforeach</td>
        <td><a href="{{Route('user.show',[$val->id])}}">phan quyen</a></td>
    </tr>
    @endforeach
</table>