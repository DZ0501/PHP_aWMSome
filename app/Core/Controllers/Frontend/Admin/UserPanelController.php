<?php
namespace App\Core\Controllers\Frontend\Admin;
use App\Core\Controllers\Controller;
use App\Domain\Models\user;
use Illuminate\Http\Request;

class UserPanelController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.user_panel', ['listItems' => user::all()]);
    }
}
