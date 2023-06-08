<?php

namespace App\Core\Controllers\Frontend;

use App\Core\Controllers\Controller;
use App\Domain\Models\user;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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

    public function show(user $user)
    {
        return view('admin.user_panel_examine', ['user' => $user]);
    }

    public function delete(user $user)
    {
        try {
            $user->delete();
            return redirect('/user_panel');
        } catch (\Throwable $e) {
            return \response($e->getMessage());
        }

    }
//        $user = user::find($id);
//        if ($user)
//        {
//            $user->delete();
//            return redirect('/user_panel');
//        }
//        else
//        {
//            return dd("nie udało się usunąć użytkownika.");
//        }
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view('admin.user_panel_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, user $user)
    {

        try
        {
//            \Log::info(json_encode($request->all()));
            $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'role_id' => $request->role_id,
                ]);
            return redirect('/user_panel');
        }
        catch (\Throwable $e)
        {
            return \response($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
