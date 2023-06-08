<?php

namespace App\Core\Controllers\Api;

use App\Core\Controllers\Controller;
use App\Domain\Models\user;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use http\Env\Response;
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
        try {
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'role_id' => $request->role_id,
                'password' => Hash::make($request->password)
            ]);

            return UserResource::make($user);

        } catch (\Exception $e) {

            if ($e->getCode() === '23000') {
                return response()->json(['error' => 'Email already exists.'], 422);
            }

            // Handle other exceptions
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $user = user::findOrFail($id);

            if (!$user) {
                return response()->json(['error' => 'User not found.'], 404);
            }
            return UserResource::make($user);
        } catch (\Throwable $e) {
            return response()->json(['error' => 'User was not found.']);
        }
    }

    public function delete(user $user)
    {
        try {
            $user->delete();
        } catch (\Throwable $e) {
            return \response($e->getMessage());
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, user $user)
    {
        try {
//           \Log::info(json_encode($request->all()));
            $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'role_id' => $request->role_id,
                ]);
            return response()->json(['User information updated.']);
        } catch (\Throwable $e) {
            return \response($e->getMessage());
        }

    }

}
