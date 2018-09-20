
@extends('layouts')

@section ('title',"Pantalla Principal")
@section('content')
  <h1>{{$title}}</h1>
  <div class="container">
                
      <table class="table table-bordered">
       

             
          <thead>
              
              <tr  bgcolor= "#00FFFF" >
                <th>Nombre Completo</th>
               
                <th>Detalles de la persona</th>
              </tr>
            </thead>
       
           
            <tbody>
                <tr>
                    
                        @forelse ($users as $user)
                        
                          <tr bgcolor= "pink">
                         <td> {{ $user->name}}, ({{ $user->email}})</td>
                        <td> <a href="{{ route('users.show', ['id' =>$user])}}"class="btn btn-info" role = "button" > Ver detalle </a></td>
                          </tr>  
                      
                        @empty
                          <li> No hay usuarios registrados.</li>
                       @endforelse
       
                    
                </tr>
              </tbody>
            </table>
          </div>
          
         

@endsection

@section('sidebar')
  @parent
@endsection




 