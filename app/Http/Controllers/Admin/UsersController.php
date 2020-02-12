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
        User::where('name', 'pepe')->where('id', 1)->get();// SELECT * FROM users WHERE name = "pepe" AND id = 1
        DB::table('users')->select('*')->where('name', 'pepe')->where('id', 1)->get();
        $user = User::find(1);
        $user2 = User::find(2);

        return view('test/welcome', [
            'pepe' => $user,
            'user2' => $user2
        ]);
    }

    public function post(Request $request)
    {
        dd($request);
        return $request->get('nombre');
    }
}
