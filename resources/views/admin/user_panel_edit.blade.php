@extends('.layouts/layout_admin')

@section('main_content')

    <header>
        <h2 class="text-lg">User information</h2>

        <p class="mt-1 text-sm text-gray-600">Update account informations for user with identifier <b> {{$user->id}}</b>.</p>
    </header>

    <form method="post" action="/user_panel/update/{{$user->id}}" class="mt-6 space-y-6">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <table class="table">
            <tr>
                <td>NAME</td>
                <td>
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td>
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </td>
            </tr>
            <tr>
                <td>ROLE</td>
                <td>
                    <select class="form-select form-select-sm w-25 d-inline" aria-label=".form-select-lg example" name="role_id">
                        <option value = {{$user->role_id}} selected>@if($user->role_id == 2) Administrator @else Authorized user @endif</option>
                        <option value="@if($user->role_id != 2) 2 @else 1 @endif">@if($user->role_id != 2) Administrator @else Authorized user @endif</option>
                    </select>
                </td>
            </tr>
        </table>


        <div class="flex items-center gap-4 mt-5">

            <input type="submit" class="btn btn-dark" value="Save">

        </div>
    </form>
@stop
