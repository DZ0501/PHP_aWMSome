<?php

namespace App\Core\Controllers\Api;

use App\Core\Controllers\Controller;
use App\Domain\Models\warehouse;
use App\Http\Requests\WarehouseRequest;
use App\Http\Resources\WarehouseResource;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WarehouseController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WarehouseResource::collection(warehouse::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WarehouseRequest $request)
    {
        try {
            $warehouse = warehouse::create([
                'code' => $request->code,
                'description' => $request->description,
                'is_active' => $request->is_active ?? 1,
            ]);

            return WarehouseResource::make($warehouse);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $warehouse = warehouse::findOrFail($id);

            if (!$warehouse) {
                return response()->json(['error' => 'User not found.'], 404);
            }
            return WarehouseResource::make($warehouse);
        } catch (\Throwable $e) {
            return response()->json(['error' => 'User was not found.']);
        }
    }

    public function delete(warehouse $warehouse)
    {
        try {
            $warehouse->delete();
        } catch (\Throwable $e) {
            return \response($e->getMessage());
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WarehouseRequest $request, warehouse $warehouse)
    {
        try {
//           \Log::info(json_encode($request->all()));
            $warehouse->update(
                [
                    'code' => $request->code,
                    'description' => $request->description,
                    'is_active' => $request->is_active,
                ]);
            return response()->json(['Warehouse information updated.']);
        } catch (\Throwable $e) {
            return \response($e->getMessage());
        }

    }

}
