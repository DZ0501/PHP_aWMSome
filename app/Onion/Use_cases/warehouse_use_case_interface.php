<?php


namespace app\Onion\Use_cases;

use app\Onion\Drivers\warehouse_repository_interface;
use app\Onion\Entities\warehouse;

interface warehouse_use_case_interface
{
    public function __construct(warehouse_repository_interface $repository);

    public function index($request) : array;
    public function show(int $id) : warehouse;
    public function delete(int $id) : bool;
    public function store(warehouse $warehouse) : bool;
}
