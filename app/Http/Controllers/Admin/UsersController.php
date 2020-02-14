<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    // php artisan make:controller NombreDelControlador
    public function index()
    {
        $users = User::all();

        return view('admin/users/index', [
            'users' => $users
        ]);
    }

    public function post(Request $request)
    {
        dd($request);
        return $request->get('nombre');
    }
}
