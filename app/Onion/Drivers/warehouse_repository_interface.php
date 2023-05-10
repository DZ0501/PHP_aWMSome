<?php


namespace app\Onion\Drivers;

use app\Onion\Entities\warehouse;

interface warehouse_repository_interface
{
    public function index($request) :array;
    public function show(int $id) : warehouse;
    public function delete(int $id) : bool;
    public function store (warehouse $warehouse) : bool;
}
