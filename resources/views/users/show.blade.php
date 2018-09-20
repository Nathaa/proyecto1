
@extends('layouts')

@section('title','Usuario {$user->id}')

@section('content')
            
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<div class="card" style="width: 30rem;">
       
        <tr bgcolor= "pink">
        <div class="card-body">
       
          <h1 class="card-title">Usuario  #  {{ $user -> id }}</h1>
          <h6 class="card-subtitle mb-2 text-muted">Informacion detallada</h6>
          <p class="card-text">
           <p> Nombre del usuario : {{ $user -> name }}</p>
            <p>Correo del usuario : {{ $user -> email }}</p>
            <p>Profession : {{ $user -> profession_id }}</p>
            <p>Password : {{ $user -> password }}</p>
          </p>
          <a href="{{ route('users.index')}}"class="btn btn-info" role = "button" > Volver </a>
        
        </div>
        </tr>
      </div>
   
      

        
@endsection

    
