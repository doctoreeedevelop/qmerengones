

 {{-- @extends('plantilla.admin')  --}}


 @extends('dashboard') 

 @section('titulo', 'Editar Categoria')
 
 
 @section ('contenido')

 @section('linkmenu')
            <a href="{{route('admin.category.index')}}" class="nav-link">Inicio</a>
    @endsection
 
 
 <div id="apicategory">
     <form action="{{ route('admin.category.update', $cat->id )}}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         
         
         {{-- {{$cat}} --}}
         <span style="display:none" id="editar">{{ $editar }}</span>
         <span style="display:none" id="nombretemp">{{ $cat->name }}</span>
 
     <div class="card">
         <div class="card-header">
             <h3 class="card-title">Edición De Las Categorias</h3>
 
             <a class="btn btn-success btn-sm ml-10" href="{{ route('admin.category.index')}}">
                 Ir a Inicio
             </a>
 
             <a class="btn btn-success btn-sm ml-10" href="{{ route('admin.category.create')}}">
                Ir a Crear
             </a>
 
             
 
             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                 <i class="fas fa-times"></i></button>
             </div>
         </div>
         <div class="card-body">
 
 
                    {{-- <h1>Crear Categoria</h1> --}}
                     <div class="form-group">
                         
                         <label for="nombre">Nombre</label>                        
                         <input v-model="nombre"
 
                             @blur= "getCategory"
                             @focus = "div_aparecer= false"
                         
                         class="form-control" type="text" name="name" id="name"
                         >
                         
                         <label for="slug">Slug</label>
                         <input readonly v-model="generarSlug" 
                         class="form-control" type="text" name="slug" id="slug"
                         >
                         
                         <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                             @{{ div_mensajeslug }}
                         </div>
 
                         <br v-if="div_aparecer">
 
                         
                         
                         <label for="descripcion">Descripción</label>
                         <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{$cat->description}}</textarea>
                         
                     </div>
                   
              {{--  @{{ nombre }}  --}}
                 <br>
                 {{-- @{{ generarSlug }} --}}
                 <br>
                {{-- @{{ slug }}  --}}
 
         </div>
 
 
         <div class="card card-warning">
             <div class="card-header">
               <h3 class="card-title">Imágenes</h3>
   
              
             </div>
             <!-- /.card-header -->
             <div class="card-body">
   
               <div class="form-group">
                   
                  <label for="imagenes">Añadir imágenes</label>
                  
                 <div class="description">
                     Solo puedes cargar una imagen para la categoria.
                 </div>       
                  <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" 
                  accept="image/*" >
                  
                  <div class="description">
                    
                    <br>
                    Límite de 2048 MB por imagen.
                    <br>
                    Tipos permitidos: jpeg, png, jpg, gif, svg.
                    <br>
                  </div>
   
               </div>
   
   
             </div>
   
   
             <!-- /.card-body -->
             <div class="card-footer">
               
             </div>
           </div>
           <!-- /.card -->
           <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">
                Imagen De La Categoria
              </div>
            </div>
            <div class="card-body">
              <div class="row">
  
  
                {{-- {{$cat->images}} --}}
                {{--  <input type="submit" id="eliminarFicha"  value="Eliminar"> --}}
                @if ($cat->images   != [])
                
                @foreach ($cat->images as $image)
                {{-- <form method="POST" action="/eliminarimagen/{{$image->id}}" id="formularioEliminar">   --}}
                  {{-- <form method="POST" action={{route('api.eliminarimagen',$image->id)}} id="formularioEliminar">
                    @csrf
                    @method('delete') --}}
                    {{--  {{$image->url}} --}}
                    <div id="idimagen-{{$image->id}}" class="col-sm-2">
                      <a href="{{$image->url}}" data-toggle="lightbox" data-title="Id:{{$image->id}}" data-gallery="gallery">
                        <img style="background:yellow; width:100%; height:250px; " src="{{$image->url}}" class="img-fluid mb-2"/>
                      </a>
                      
                      </br>
  
                      <a href="{{ $image->url }}"
                        v-on:click.prevent="eliminarimagen({{$image}})"  
                      >
                      <i class="fas fa-trash-alt" style=color:red></i>ID:{{ $image->id }}
                      </a>
                    </div>
                  
                  
      
               {{--    </form> --}}
                @endforeach  
                @else
                  <div>No hay imagen de Categoria</div>  
                @endif

  
  
  
             
              </div>
            </div>
          </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
     </div>
     <!-- /.card-body -->
         
         <div class="card-footer">
           
             <input
             :disabled = "desabilitar_boton ==1" 
             type="submit" value="Editar" class="btn btn-primary float-left"
             >
             
         </div>
     </form>
         <!-- /.card-footer-->
 </div>
     <!-- /.card -->
 
 
 
   @endsection
 
 <script>
 /*
   //window.Vue = require('vue');
   window.alert("desde apicategory siiiiiiiiiiiiiiiiiii.js");
 
 
 const apicategory = new Vue({
     el:'#apicategory',
     data: {
         nombre: '',
         slug: '',
         div_mensajeslug: 'Slug Existeeeee',
         div_clase_slug: 'badge badge-danger',
         div_aparecer: false,
         desabilitar_boton: 0
     },
     computed: {
         generarSlug : function(){
             var char= {
                 "á":"a","é":"e","í":"i","ó":"o","ú":"u",
                 "Á":"A","É":"E","Í":"I","Ó":"O","Ú":"U",
                 "ñ":"n","Ñ":"N"," ":"-","_":"-"
             }
             var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;
             
             this.slug = this.nombre.trim().replace(expr, function(e){
                 return char[e]
             }).toLowerCase()
             
             //return this.nombre.trim().replace(/ /g,'-').toLowerCase()
 
             return this.slug;
 
 
 
         }
     },
     methods: {
         getCategory(){
 
             if (this.slug){
                 let url= '/api/category/'+this.slug;
                 axios.get(url).then(response => {
                     this.div_mensajeslug = response.data;
                     //console.log(this.div_mensajeslug);
                     if(this.div_mensajeslug=='Slug Disponible'){
                         this.div_clase_slug = 'badge badge-success'; 
                         this.desabilitar_boton=0;
                     }else{
                         this.div_clase_slug = 'badge badge-danger'; 
                         this.desabilitar_boton=1;
                     }
                     this.div_aparecer = true;
                 })
             }else{
                 this.div_clase_slug = 'badge badge-danger'; 
                 this.div_mensajeslug ='Escribe Una Categoria Por Favor';
                 this.desabilitar_boton=1;
                 this.div_aparecer = true;
             }
         }
     }
 }); */
 
 </script>