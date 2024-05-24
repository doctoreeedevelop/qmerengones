@extends('dashboard')


@section('titulo', 'Editar Producto')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Productos</a></li>
    <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('estilos')
    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">

@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

    <script src="/adminlte/ckeditor/ckeditor.js"></script>

    <!-- Ekko Lightbox -->
    <script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

    <script>

        /* window.data = {
        editar:'si',
        datos: 
        {
          "nombre":"hombre",
          "precioanterior":"100",
          "porcentajedescuento":"50"
        }
      }  */


        $(function() {
            //Initialize Select2 Elements
            $('#category_id').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });



            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });


        });
    </script>

@endsection


@section('contenido')


    @section('linkmenu')
        <a href="{{route('admin.product.index')}}" class="nav-link">Inicio</a>
    @endsection


<div id="apiproduct">
  <form action="{{ route('admin.product.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PUT')


   {{-- {{$producto->precio_anterior}}   --}}
   <span class="hidden" id="editar">{{ $editar }}</span> {{-- NO BORRAR TRAEN EL NOMBRE DEL PRODUCTO Y SLUG --}}
   <span class="hidden" id="nombretemp">{{$producto->nombre}}</span>
   <span class="hidden" id="precioactual">{{$producto->precio_actual}}</span>
   <span class="hidden" id="precioanterior">{{$producto->precio_anterior}}</span>
   <span class="hidden" id="porcentajededescuento">{{$producto->porcentaje_descuento}}</span>
   <span class="hidden" id="descuento">{{$producto->porcentaje_descuento}}</span>
   <span class="hidden" id="descuento_mensaje">{{$producto->porcentaje_descuento}}</span>
  
   <!-- Main content -->

    <section class="content">
      <div class="container-fluid">

        <!--SECCION DATOS GENERADOS AUTOMATICAMENTE -->
        
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Datos generados automáticamente</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                   <!--ITEM visitas -->
                  <label>Visitas</label>
                  <input class="form-control" type="number" id="visitas" name="visitas" readonly
                    value="{{ $producto->visitas }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!--ITEM ventas -->
                  <label>Ventas</label>
                  <input class="form-control" type="number" id="ventas" name="ventas" readonly value="{{ $producto->ventas }}">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>

        <!--SECCION DATOS DEL PRODUCTO -->
        
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos del producto</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!--ITEM nombre-->
                  <label>Nombre</label>
                  <input  v-model="nombre" 
                          @blur  = "getProduct" 
                          @focus = "div_aparecer = false"
                          class="form-control" 
                          type="text" 
                          id="nombre" 
                          name="nombre"
                  >
                  <!--ITEM slug-->
                  <label>Slug</label>
                  <input  
                          readonly 
                          v-model="generarSlug" 
                          class="form-control" 
                          type="text"
                          id="slug" 
                          name="slug"
                  >
                  <div    v-if="div_aparecer" 
                          v-bind:class="div_clase_slug"
                  >
                          @{{ div_mensajeslug }}
                  </div>
                  <br     v-if="div_aparecer">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!--ITEM categoria-->
                  <label>Categoria</label>
                  <select name="category_id"
                          id="category_id" 
                          class="form-control "
                          style="width: 100%;"
                  >
                    @foreach ($categorias as $categoria)
                      @if ($categoria->name == $producto->category->name)
                        <option value="{{ $categoria->id }}" selected="selected">
                          {{ $categoria->name }}
                        </option>
                      @else 
                        <option value="{{ $categoria->id }}">
                          {{ $categoria->name }}
                        </option>
                      @endif
                    @endforeach
                  </select>
                  <!--ITEM cantidad-->
                  <label>Cantidad</label>
                  <input class="form-control" type="number" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>

        <!--SECCION DE PRECIOS-->
        
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Sección de Precios</h3>
          </div>
          <div class="card-body">
            <div class="row">
               <!--ITEM Precio anterior-->
              <div class="col-md-3">
                <div class="form-group">
                  <label>Precio anterior</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input  
                            v-model="precioanterior" 
                            class="form-control" 
                            type="number"
                            id="precioanterior"
                            name="precioanterior" 
                            min="0" 
                            value="{{$producto->precio_anterior}}"
                            step=".01"
                    >
                  </div>
                </div>
              </div>
              <!--ITEM Precio Actual-->
              <div class="col-md-3">
                <div class="form-group">
                  <label>Precio actual</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input  v-model="precioactual"
                            class="form-control" 
                            type="number"
                            id="precioactual" 
                            name="precioactual" 
                            min="0" 
                            value="0"
                            step=".01"
                    >
                  </div>
                  <br>
                  <span id="descuento">
                    @{{ generardescuento }}
                  </span>
                </div>
              </div>
              <!--ITEM Porcentaje de descuento-->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Porcentaje de descuento</label>
                  <div class="input-group">
                    <input    
                              v-model="porcentajededescuento"
                              class="form-control" 
                              type="number"
                              id="porcentajededescuento" 
                              name="porcentajededescuento" 
                              step="any"
                              min="0" 
                              max="100" 
                              value="{{$producto->porcentaje_descuento}}"
                    >
                    <div class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                  <br>

                  <!--ITEM barra de progreso-->
                  <div class="progress">
                    <div    id="barraprogreso" 
                            class="progress-bar" 
                            role="progressbar"
                            v-bind:style="{width: porcentajededescuento+'%'}" 
                            aria-valuenow="0"
                            aria-valuemin="0" 
                            aria-valuemax="100"
                    >
                      @{{ porcentajededescuento }}%
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>

        <!--SECCION DE PRODUCTOS Y ESPECIFICAIONES Y OTROS DATOS-->
        
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Descripciones del producto</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Descripción corta:</label>
                    <textarea class="form-control ckeditor" name="descripcion_corta" id="descripcion_corta" rows="3">{{ $producto->descripcion_corta }}</textarea>
                </div>
                <div class="form-group">
                  <label>Descripción larga:</label>
                  <textarea class="form-control ckeditor" name="descripcion_larga" id="descripcion_larga" rows="5">{{ $producto->descripcion_larga }}</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Especificaciones y otros datos</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Especificaciones:</label>
                  <textarea class="form-control ckeditor" name="especificaciones" id="especificaciones" rows="3">{{ $producto->especificaciones }}</textarea>
                </div>
                <div class="form-group">
                  <label>Datos de interes:</label>
                  <textarea class="form-control ckeditor" name="datos_de_interes" id="datos_de_interes" rows="5">{{ $producto->datos_de_interes }}</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        
         <!--SECCION DE IMAGENES-->
        
        <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Imágenes</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="imagenes">Añadir imágenes</label>
              <input  type="file" 
                      class="form-control-file" 
                      name="imagenes[]" 
                      id="imagenes[]"
                      multiple accept="image/*"
              >
              <div class="description">
                Un número ilimitado de archivos pueden ser cargados en este campo.
                <br>
                Límite de 2048 MB por imagen.
                <br>
                Tipos permitidos: jpeg, png, jpg, gif, svg.
                <br>
              </div>
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>

        <!--SECCION DE GALERIA DE IMAGENES-->

        <div class="card card-primary">
          <div class="card-header">
            <div class="card-title">
              Galeria De Imagenes
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              @if ($producto->images == [])
                <div>No hay imagenes de Producto</div>
              @else
                @foreach ($producto->images as $image)
                  <div id="idimagen-{{ $image->id }}" class="col-sm-2">
                    <a href="{{ $image->url }}" 
                            data-toggle="lightbox"
                            data-title="Id:{{ $image->id }}" 
                            data-gallery="gallery">
                            <img style="background:yellow; width:100%; height:250px; "
                              src="{{ $image->url }}" class="img-fluid mb-2" 
                            />
                    </a>
                    </br>
                    <a href="{{ $image->url }}"
                        v-on:click.prevent="eliminarimagen({{ $image }})"
                    >
                      <i class="fas fa-trash-alt" style=color:red></i>ID:{{ $image->id }}
                    </a>
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        </div>

        <!--SECCION DE ADMINISTRACION-->

        <div class="card card-danger">
          <!--ITEM estado-->
          <div class="card-header">
            <h3 class="card-title">Administración</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Estado</label>
                  <input  type="text" 
                          id="estado"
                          name="estado"
                          value="{{ $producto->estado }}"
                  >
                  Nuevo
                </div>
              </div>
                 <!--ITEM check box son 4-->
              <div class="col-sm-6">
                <div class="form-group clearfix">
                  <div class="custom-control custom-checkbox">
                    <input  type="checkbox" 
                            class="custom-control-input" 
                            id="activo"
                            name="activo" 
                            @if ($producto->activo == 'si') checked @endif
                    >
                    <label class="custom-control-label" for="activo">Activo</label>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input  type="checkbox" 
                              class="custom-control-input" 
                              id="sliderprincipal"
                              name="sliderprincipal"
                              @if ($producto->sliderprincipal == 'si') checked @endif
                      >
                      <label class="custom-control-label" for="sliderprincipal">Aparece en el Slider principal</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input  type="checkbox" 
                              class="custom-control-input" 
                              id="masvendidos"
                              name="masvendidos" 
                              @if ($producto->masvendidos == 'si') checked @endif
                      >
                      <label class="custom-control-label" for="masvendidos">Mas Vendidos</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input  type="checkbox" 
                              class="custom-control-input" 
                              id="promociones"
                              name="promociones" 
                              @if ($producto->promociones == 'si') checked @endif>
                              <label class="custom-control-label" for="promociones">En Promocion</label
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!--Boton Editar-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input  :disabled="deshabilitar_boton==1" 
                            type="submit" 
                            value="Editar"
                            class="btn btn-primary" 
                            @click = "mensajedit"
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
</div>    

@endsection
