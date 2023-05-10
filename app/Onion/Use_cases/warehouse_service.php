<?php


namespace app\Onion\Use_cases;

use app\Onion\Drivers\warehouse_repository_interface;
use app\Onion\Entities\warehouse;

class warehouse_service implements warehouse_use_case_interface
{

    public function __construct(warehouse_repository_interface $repository)
    {
        $this->repository = $repository;
    }

    public function index($request): array
    {
        return $this->repository->index($request);
    }

    public function show(int $id): warehouse
    {
        return $this->repository->show($id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function store(warehouse $warehouse): bool
    {
        return $this->repository->store($warehouse);
    }

}
