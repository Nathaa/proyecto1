


@extends('layouts')

@section('title',"Crear usuario")

@section('content')

<h1> Crear usuario</h1>

<form method="POST" action="{{ url('usuario/crear') }}">
    {!! csrf_field()!!} 
    <button type="submit">Crear usuario</button>
        
</form>
<p>
          <a href="{{ route('users.index')}}"class="btn btn-info" role = "button" > Volver </a>
</p>
@endsection     
