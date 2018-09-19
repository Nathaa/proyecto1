
@extends('layouts')


@section('content')
  <h1>{{$title}}</h1>
           <hr>
  
             <ul>
                 @forelse ($users as $user)
                 <li>{{ $user->name}}, ({{ $user->email}})
                 //indicar a la url a donde quiera navegar//
                  <a href="{{ route('users.show', ['id' =>$user])}}">ver detalles</a> 
                 </li>
                 @empty
                   <li> No hay usuarios registrados.</li>
                @endforelse

             </ul>

@endsection

@section('sidebar')
  @parent
@endsection




 