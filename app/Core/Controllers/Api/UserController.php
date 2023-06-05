<?php

namespace App\Core\Controllers\Api;

use App\Core\Controllers\Controller;
use App\Domain\Models\user;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(user::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
       $user = user::create([
           'email' => $request->email,
           'name' => $request->name,
           'role_id' => $request->role_id,
           'password' => Hash::make($request->password)
       ], $request->validated());

       return UserResource::make($user);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = user::find($id);
        return UserResource::make($user);
    }

    public function delete($id)
    {
        $user = user::find($id);
        if ($user)
        {
            $user->delete();
            return redirect('/user_panel');
        }
        else
        {
            return dd("nie udało się usunąć użytkownika.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
