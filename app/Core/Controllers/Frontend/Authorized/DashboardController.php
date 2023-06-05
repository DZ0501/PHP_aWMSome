<?php

namespace App\Core\Controllers\Frontend\Authorized;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('authorized.dashboard');
    }
}
