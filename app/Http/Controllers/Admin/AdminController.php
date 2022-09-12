<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AdminController extends Controller
{
//    /**
//     * AdministratorController constructor.
//     */
//    public function __construct() {
//        $this->middleware('auth:administrator');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function dashboard(): view
    {
        return view('admins.components.dashboard');
    }

}
