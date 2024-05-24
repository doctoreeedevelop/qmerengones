{{-- @extends('plantilla.admin')

@section('titulo', 'Crear Categoria')


@section ('contenido') --}}


<div id="apicategory">

    <div class="card">
        {{-- <div class="card-header">
        <h3 class="card-title">Pruebaaaaaaaa</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
        </div> --}}
        <div class="card-body">


        
    
        
                <form action="" method="POST">
                    {{-- <h1>Crear Categoria</h1> --}}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        
                        <input v-model="nombre"

                            @blur= "getCategory"
                            @focus = "div_aparecer= false"
                        
                        class="form-control" type="text" name="nombre" id="nombre">
                        
                        <label for="slug">Slug</label>
                        <input readonly v-model="generarSlug" class="form-control" type="text" name="nombre" id="slug">
                        <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                            @{{ div_mensajeslug }}
                        </div>
                        <br v-if="div_aparecer">

                        
                        
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descipcion" cols="30" rows="5"></textarea>
                        
                    </div>
                  
            {{--  @{{ nombre }} --}}
                <br>
                {{-- @{{ generarSlug }} --}}
                <br>
                {{-- @{{ slug }} --}}

        </div>


        {{-- <script>
            var app = new Vue({
                el:'#app',
                data: {
                    nombre: 'jhonatan fernández',
                    slug: '',
                    div_mensajeslug: 'Slug Existe',
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
                        let url= 'api/category/'+this.slug;
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
                    }
                }
            })


        </script> --}}




    </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
            <input
            :disabled = "desabilitar_boton ==1" 
            type="submit" value="Guardar" class="btn btn-primary float-right"
            >
    </form>
    
        </div>
        <!-- /.card-footer-->
</div>
    <!-- /.card -->



  {{-- @endsection --}}