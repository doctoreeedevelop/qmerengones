@extends('dashboard') 

@section('titulo', 'Crear Categoria')


@section ('contenido')



    <form action="{{ route('admin.user.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <h2>Editar Usuarios</h2>

            @include ('custom.message')
            
            <div class="form-label">
                <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name', $user->name)}}  disabled">
            </div> 

            <div class="form-label">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Codigo email" value="{{old('email', $user->email)}} disabled">
            </div>

            <div class="form-label">
                <label for="exampleInputEmail1" class="form-label">Tipo De ROL</label>
                <select disabled id="roles" name="roles">
                    @foreach($roles as $role)
                        
                        <option class="form-control"   value="{{ $role->id }}"
                            @isset($user->roles[0]->name)
                                @if ($role->name == $user->roles[0]->name)
                                    selected
                                @endif
                            @endisset                            
                        >
                        {{ $role->name }}
                        </option>

                    @endforeach    
            
                </select> 
            </div>
          
            
            </br>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </br>
    
    
            <hr>
        </div>

          






</form> 

            {{-- {!! dd(old())  !!} --}}


       
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
            </div>
        </div>
    </div>
    @endsection