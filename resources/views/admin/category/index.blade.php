{{-- @extends('plantilla.admin')  --}}


@extends('dashboard')

@section('titulo', 'Administracion De Categorias')


@section('contenido')

    @section('linkmenu')
            <a href="{{route('admin.category.index')}}" class="nav-link">Inicio</a>
    @endsection

    {{-- {{ $page }} --}}

<div id="confirmareliminar" class="row">


        {{-- <span id="urlbase">{{route('admin.category.index')}}</span> --}}
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Administración de Categorias</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-left" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 100%;">
                    <td><a class="m-3 float-left btn btn-primary" href="{{ route('admin.category.create') }}">Crear
                            Categoria</a></td>
                    <table class="table table-head-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Descripcion</th>
                                <th>Fecha de Creacion</th>
                               {{--  <th>Fecha de Modificacion</th> --}}
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--  {{ $categorias }} --}}
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    @if ($categoria->images->count() <= 0)
                                        <td><img style="height: 60px; width: 60px;" src="/imagenes/avatar.png" alt=""
                                                class="round-circle"></td>
                                    @else
                                        <td><img style="height: 60px; width: 60px;" src="{{ $categoria->images[0]->url }}"
                                                alt=""></td>
                                    @endif
                                    <td>{{ $categoria->name }}</td>
                                    <td>{{ $categoria->slug }}</td>
                                    <td>{{ $categoria->description }}</td>
                                   {{--  <td>{{ $categoria->created_at }}</td> --}}
                                    <td>{{ $categoria->updated_at }}</td>

                                    <td>
                                        <a class="btn btn-default btn-sm"
                                            href="{{ route('admin.category.show', $categoria->slug) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('admin.category.edit', $categoria->slug) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path
                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td> 

                                        <form action="{{ route('api.eliminarcat', $categoria->id )}}" method="POST">
                                            @method('DELETE')
                                            @csrf 
                                            <button class="btn btn-danger btn-sm" type="submit"                                                
                                                v-on:click.prevent="eliminarcate({{$categoria->id}})"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                </svg>
                                               
                                            </button>     
                                        </form>   




                                        {{-- <form method="POST" action={{ route('api.eliminarcat', $categoria->id) }} id="formularioEliminar"> --}}
                                        {{-- <form method="POST" action="/api/eliminarcat/{{$categoria->id}}" id="formularioEliminar">
                                            @csrf                                    
                                            @method('delete')

                                            <input type="submit" id="formularioEliminar"  value="Eliminar"
                                            v-on:click.prevent="deseas_eliminar({{$categoria->id}})" --}}
                                            
                                            
                                            {{-- > --}}
                                        
                                            {{--  <a  class="btn btn-danger btn-sm"
                                                href="{{ route('admin.category.create') }}" 
                                                v-on:click.prevent="deseas_eliminar({{$categoria->id}})"
                                                            
                                            >                            
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                </svg>

                                            </a> --}}
                                       {{--  </form> --}}
                                    </td>
                                 

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{--  {{ $categorias->links()}} --}}


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    {{-- {{ dd($categorias) }} --}}

@endsection


