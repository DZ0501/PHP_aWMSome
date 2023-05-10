<?php


namespace app\Onion\Controllers;

use app\Onion\Use_cases\warehouse_use_case_interface;
use app\Onion\Entities\warehouse;

class warehouse_show_handler
{
    private $service;

    public function __construct(warehouse_use_case_interface $service)
    {
        $this->service = $service;
    }

    public function handle($request)
    {
        return $this->service->show($request->id);
    }
}
