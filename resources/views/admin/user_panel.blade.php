@extends('.layouts/layout_admin')

@section('main_content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th class="w-25" scope="col">NAME</th>
            <th class="w-50" scope="col">OPERATIONS</th>
        </tr>
        </thead>
        <tbody>
        @auth()
        @foreach($Users as $User)
            <tr>
                <td>{{$User->id}}</td>
                <td>{{$User->name}}</td>
                <td class="justify-content-center d-flex">
                    <form method="GET" action="/user_panel/edit/{{$User->id}}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-dark" value="Edit">
                    </form>

                    <form method="GET" action="/user_panel/examine/{{$User->id}}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-dark" value="Examine">
                    </form>

                    <form method="POST" action="/user_panel/delete/{{$User->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-dark" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        @endauth
        </tbody>
    </table>

    <div class="w-100 d-inline-flex justify-content-center">
    {{$Users->links('pagination::simple-bootstrap-5')}}
    </div>

@stop
