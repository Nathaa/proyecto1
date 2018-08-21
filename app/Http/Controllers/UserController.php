<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'joel',
            'maria',
            'fernando',
            'philip',
            'mario',
        ];

        return view('users')->with([
            'users'->$users,
            ]);
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario:{$id}";
    }
}
