
@extends('dashboard') 

@section('titulo', 'Crear Categoria')


@section ('contenido')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



               {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> --}}
               {{--  <x-welcome /> --}}

              
                <div class="container">
                   <h2>Listado de Usuarios</h2>

                   @include ('custom.message')

                </div>   
                 <table class="table">
                     <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role(s)</th>
                        <th colspan="3" >*</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user) 
                           {{-- {{$user}} --}} 
                            
                            {{-- {{$user->roles[0]->name}} --}}
                            <tr>
                                <th scope="row">  {{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td> {{-- {{$user->roles[0]->name}} --}} 
                                     @isset( $user->roles[0]->name )
                                        {{ $user->roles[0]->name }}
                                    @endisset 

                                </td>
                                
                                <td><a                             
                                    class="btn btn-info btn-sm"
                                    href="{{ route('admin.user.show', $user->id) }}"
                                    >Show
                                    </a>
                                </td>
                                <td><a                             
                                    class="btn btn-success btn-sm"
                                    href="{{ route('admin.user.edit', $user->id) }}"
                                    >Edit
                                    </a>
                                </td>
                                <td>                                   
                                    
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Eliminar</button>             
                                    </form>
                                                                        
                                </td>
                            </tr>
                      @endforeach
                    </tbody>
                  </table>






           
            </div>
        </div>
    </div>
    @endsection


