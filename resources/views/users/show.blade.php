
@extends('layouts')

@section('title','Usuario {$user->id}')

@section('content')

            <h1>Usuario {{$user->id}}</h1>

            <hr>
        
             <p>Nombre del usuario {{$user->name}}</p>
             <p>Correo electronico {{$user->email}}</p>

    <p>
       <a href="{{ route('users.index')}}">Regresar al listado del usuario</a>

    </p>
@endsection

    
