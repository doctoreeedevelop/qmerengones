@extends('dashboard') 

@section('titulo', 'Pedidos')


@section ('contenido')

    @section('linkmenu')
        <a href="{{route('admin.pedido.index')}}" class="nav-link">Inicio</a>
    @endsection


<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-sm-12">

            <h3 class="mt-3 mb-3 fs-4">Seccion Pedidos</h3>
          {{--  @if($pedidos->count())  --}}
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                    <th scope="col">idPedido</th>
                    <th scope="col">idCli</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Fecha Pedido</th>
                    <th scope="col">Modo de pago</th>
                    <th scope="col">Total</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                    <th colspan="3" >*</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pedidos as $pedido)   
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->user_id }}</td>
                            <td>{{ $pedido->user->name }}</td> 
                            <td>{{ $pedido->fechapedido}}</td>
                            <td>{{ $pedido->modopago }}</td>
                            <td>{{ $pedido->total}}</td>
                           <td>
                                @if($pedido->estado == 'nuevo') 
                                    <div class="text-center" style='background-color: rgb(231, 169, 119); border-radius: 10px;'>
                                        {{ $pedido->estado}}
                                    </div>                                                      
                                @elseif($pedido->estado == 'proceso')
                                    <div class="text-center" style='background-color: rgb(238, 253, 39); border-radius: 10px;'>
                                        {{ $pedido->estado}}
                                    </div>   
                                @elseif($pedido->estado == 'entregado')
                                    <div class="text-center" style='background-color: rgb(39, 253, 64); border-radius: 10px;'>
                                        {{ $pedido->estado}}
                                    </div>   
                                @endif    
                            
                            
                            </td>
                            
                            <td>
                                <a class="btn btn-info btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg>
                                </a>
                            </td>
                            <td><a class="btn btn-success btn-sm" href="{{ route('admin.pedido.edit', $pedido->id) }}"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                    </svg>
                                </a>
                            </td>
                            <td>                                   
                                
                                {{-- <form action="{{ route('admin.pedido.destroy', $pedido->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>             
                                </form> --}}
                                                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          {{--  @endif --}}
        </div>
    </div>
</div>
@endsection

