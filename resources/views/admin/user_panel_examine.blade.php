@extends('.layouts/layout_admin')

@section('main_content')

    <table class="table">
        <tr>
            <td>ID</td>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <td>ROLE ID</td>
            <td>{{$user->role_id}}</td>
        </tr>
        <tr>
            <td>NAME</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>{{$user->email}}</td>
        </tr>
    </table>

@stop
