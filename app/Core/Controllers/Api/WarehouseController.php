<?php

namespace App\Core\Controllers\Api;

use App\Core\Controllers\Controller;
use App\Domain\Models\warehouse;
use App\Http\Requests\WarehouseRequest;
use App\Http\Resources\WarehouseResource;
use App\Http\Responses\ApiErrorResponse;
use App\Http\Responses\ApiSuccessResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class WarehouseController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): ApiSuccessResponse|ApiErrorResponse
    {
        try {
            $warehouses = WarehouseResource::collection(warehouse::all());
            return new ApiSuccessResponse($warehouses, ['message' => 'Warehouses listed successfully.']);
        } catch (Throwable $e) {
            return new ApiErrorResponse($e, ['message' => 'Warehouses were not listed.']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WarehouseRequest $request): ApiSuccessResponse|ApiErrorResponse
    {
        try {
            $warehouse = warehouse::create($request->only('code', 'description'));
            return new ApiSuccessResponse($warehouse, ['message' => 'Warehouse ' . $warehouse->name . ' created.'], 201);
        } catch (Throwable $e) {
            return new ApiErrorResponse($e, ['message' => 'Warehouse not created.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(warehouse $warehouse): ApiSuccessResponse|ApiErrorResponse
    {
        try {
            return new ApiSuccessResponse(['id'=> $warehouse->id, 'code:' => $warehouse->code, 'description' => $warehouse->description, 'is_active' => $warehouse->is_active], ['message' => 'Data retrived successfully'],);
        } catch (Throwable $e) {
            return new ApiErrorResponse($e, ['message' => 'Warehouse not found.']);
        }
    }

    /**
     * Delete the specified resource.
     */
    public function delete(warehouse $warehouse): ApiSuccessResponse|ApiErrorResponse
    {
        try {
            $warehouse->delete();
            return new ApiSuccessResponse(['id'=> $warehouse->id, 'code:' => $warehouse->code, 'description' => $warehouse->description, 'is_active' => $warehouse->is_active], ['message' => 'Warehouse deleted.']);
        } catch (Throwable $e) {
            return new ApiErrorResponse($e, ['message' => 'Warehouse not deleted.']);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WarehouseRequest $request, warehouse $warehouse)
    {
        try {
            $warehouse->update($request->only('code', 'description', 'is_active'));
            return new ApiSuccessResponse($warehouse, ['message' => 'Warehouse updated.'], 202);
        } catch (Throwable $e) {
            return new ApiErrorResponse($e, ['message' => 'Warehouse not updated']);
        }

    }

    public function assign(Request $request)
    {
        $userId = $request->input('user_id');
        $warehouseId = $request->input('warehouse_id');

        try {
            // Find the user and warehouse models
            $user = user::findOrFail($userId);
            $warehouse = warehouse::findOrFail($warehouseId);

            // Assign the warehouse to the user
            $user->update([
                'warehouse_id' => $warehouseId,
            ]);

            // Return a success response
            return response()->json([
                'message' => 'Warehouse assigned to user successfully.',
                'user_id' => $user->id,
                'warehouse_id' => $warehouse->id,
            ]);
        } catch (\Throwable $e) {
            // Log the error
            Log::error('Error assigning warehouse to user:', ['error' => $e->getMessage()]);

            // Return an error response
            return response()->json([
                'error' => 'Failed to assign warehouse to user.',
            ], 500);
        }
    }

}
