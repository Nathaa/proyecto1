<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); //listado dinamico de usuarios es decir de la base

        //dd($users);//muestra  una coleccion de los objetos
        //consulta de todos los usuarios que estan en la tabla users
        $title = 'Listado de usuarios';

        //Forma de desplegar el codigo, llamando a la vista;
        // return view('users.index')
        //->with('users', User::all())
        //->with('title', 'Listados de usuarios');

        return view('users.index', compact('title', 'users'));
    }

    public function show(User $user)
    {
        $user = User::findOrFail($id);

        //dd($user);

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        return 'Procesando la informacion';
    }
}
