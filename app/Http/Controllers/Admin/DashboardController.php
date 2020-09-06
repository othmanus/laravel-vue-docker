<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(AdminRequest $request) : View
    {
        return view('admin.dashboard');
    }
}
