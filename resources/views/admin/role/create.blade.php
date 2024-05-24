@extends('dashboard') 

@section('titulo', 'Crear Categoria')


@section ('contenido')

    @section('linkmenu')
            <a href="{{route('admin.role.index')}}" class="nav-link">Inicio</a>
    @endsection



    <form action="{{ route('admin.role.store')}}" method="POST">
                @csrf
                <div class="container">
                    <h2>Creacion de Roles</h2>

                    @include ('custom.message')
                    
                    <div class="form-label">
                        <label for="exampleInputEmail1" class="form-label">Nombre del ROL</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
                    </div> 

                    <div class="form-label">
                        <label for="exampleInputEmail1" class="form-label">Codigo Del Rol En Letras</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Codigo Slug" value="{{old('slug')}}">
                    </div>

                    <div class="form-floating">
                        <label for="floatingTextarea2">Descripcion</label>
                        <textarea class="form-control" name="description" placeholder="Coloque La Descripcion" id="floatingTextarea2" style="height: 100px">{{old('description')}}</textarea>
                    </div>

                    
                </div>
                </br></br>
                
                <hr>

                  

      
        {{-- <div class="container">
          
                    <h3>Full Access</h3>
                  
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="full-access" id="fullaccessno" value="yes"
                    
                        @if ( $role['full-access']=="yes")
                            checked
                        @elseif (old('full-access')=="yes")
                            checked
                        @endif    
                        >
        
                        <label class="form-check-label" for="fullaccessyes" >
                            SI
                        </label>
                  </div>
                  <div class="form-check">
                        <input class="form-check-input" type="radio" name="full-access" id="exampleRadios2" value="no" 
                        
                        @if ( $role['full-access']=="no")
                            checked
                        @elseif (old('full-access')=="no")
                            checked
                        @endif         
                        >
                        
                        
                        <label class="form-check-label" for="fullaccessno">
                            NO
                        </label>
                  </div>
                
        </div> --}}
        <div class="container">

            <h3>Full Access</h3>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                    @if (old('full-access')=="yes") 
                         checked 
                    @endif
                            
                            
                            >
                            <label class="custom-control-label" for="fullaccessyes">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                            @if (old('full-access')=="no") 
                              checked 
                            @endif
                            @if (old('full-access')===null) 
                              checked 
                            @endif
                            
                            >
                            <label class="custom-control-label" for="fullaccessno">No</label>
                          </div>

                          <hr>

        
        
        

        
            <h3>Listado de Permisos</h3>

            @foreach($permissions as $permission)

                <div class="form-check form-switch">
                    
                    <input  class="form-check-input" 
                            type="checkbox" 
                            id="permission_{{$permission->id}}"
                            value="{{$permission->id}}"
                            name="permission[]"
                    >

                    <label  class="form-check-label" 
                            for="permission_{{$permission->id}}">
                        
                        {{ $permission->id}}
                        -
                        {{ $permission->name}}
                        ---
                        
                        <em>( {{ $permission->description }} )</em>

                    </label>
                </div>

            @endforeach
            <hr>
            <input class="btn btn-primary" type="submit" value="guardar">    

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