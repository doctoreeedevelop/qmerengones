

 {{-- @extends('plantilla.admin')  --}}


 @extends('dashboard') 

 @section('titulo', 'Crear Categoria')
 
 
 @section ('contenido')

    @section('linkmenu')
                <a href="{{route('admin.category.index')}}" class="nav-link">Inicio</a>
    @endsection
 

<div id="apicategory"> 
    <form action="{{ route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Crear las Categorias</h3>
                <div    
                        v-if="div_aparecer" 
                        v-bind:class="div_clase_slug"
                >
                        @{{ div_mensajeslug }}
                </div>
                <div>
                    <br v-if="div_aparecer">
                </div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>                        
                        <input      
                                    v-model="nombre"
                                    @blur="getCategory"
                                    @focus ="div_aparecer= false"                         
                                    class="form-control" 
                                    type="text" 
                                    name="name" 
                                    id="name"
                        >
                        <label for="slug">Slug</label>
                        <input      
                                    readonly 
                                    v-model="generarSlug" 
                                    class="form-control" 
                                    type="text" 
                                    name="slug" 
                                    id="slug"
                        >
                        <div        
                                    v-if="div_aparecer" 
                                    v-bind:class="div_clase_slug"
                        >
                                    @{{ div_mensajeslug }}
                        </div>
                        <br v-if="div_aparecer">

                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">Imágenes</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="imagenes">Añadir imágenes</label>
                        <div class="description">
                            Solo puedes cargar una imagen para la categoria.
                        </div>       
                        <input      
                                    type="file"
                                    class="form-control-file" 
                                    name="imagenes[]" 
                                    id="imagenes[]" 
                                    accept="image/*"
                        >
                        <div class="description">
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
        </div>
        <div class="card-footer">
            <input
                        {{-- :disabled = "desabilitar_boton == 0"  --}}
                        type="submit" 
                        value="Guardar" 
                        class="btn btn-primary float-left"
                        v-on:click="guardarcat()"
            >
        </div>
    </form>
</div>
@endsection
 
 