@extends('dashboard') 

@section('titulo', 'Crear Categoria')


@section ('contenido')

    @section('linkmenu')
        <a href="{{route('admin.role.index')}}" class="nav-link">Inicio</a>
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
               {{--  <x-welcome /> --}}

              
                <div class="container">
                   <h2>Listado de Roles</h2>

                   @include ('custom.message')

                    </br>
                   <a href="{{ route('admin.role.create') }}" class="btn btn-primary btn-sm float-left">Crear Rol</a>
                    </br>
                </div>   
                 <table class="table">
                     <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Full-Access</th>
                        <th colspan="3" >*</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($roles as $role)   
                            <tr>
                                <th scope="row">  {{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->description }}</td>
                                <td>{{ $role['full-access'] }}</td>
                                <td><a                             
                                    class="btn btn-info btn-sm"
                                    href="{{ route('admin.role.show', $role->id) }}"
                                    >Show
                                    </a>
                                </td>
                                <td><a                             
                                    class="btn btn-success btn-sm"
                                    href="{{ route('admin.role.edit', $role->id) }}"
                                    >Edit
                                    </a>
                                </td>
                                <td>                                   
                                    
                                    <form action="{{ route('admin.role.destroy', $role->id) }}" class="formulario-eliminar" method="POST">
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
    @if (session('eliminar') == 'ok')
    <script>Swal.fire("SweetAlert2 is working!")</script>
    <script>
        Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
        });
    </script>
    @endif 

@endsection


