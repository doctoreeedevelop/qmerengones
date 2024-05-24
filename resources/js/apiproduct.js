//window.alert("desde apiproduct si.js");


const apiproduct = new Vue({
    el:'#apiproduct',
    data: {
        nombre: '',
        slug: '',
        div_mensajeslug: 'El Producto YA! Existe',
        div_clase_slug: 'badge badge-danger',
        div_aparecer: false,
        deshabilitar_boton: 0,

        //VARIABLES DE PRECIO

        precioanterior:0,
        precioactual:0,
        descuento:0,
        porcentajededescuento:0,
        descuento_mensaje:'0' 
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



        },

        generardescuento : function()
        {

                console.log('desde consola')
                if(this.porcentajededescuento > 100)
                {
                    
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "No puedes poner un valor mayor a 100",
                        footer: '<a href="#">Revisalo por Favor</a>'
                    });
                    
                   
                    this.porcentajededescuento = 100;
                    
                    this.descuento = (this.precioanterior * this.porcentajededescuento) /100;
                    this.precioactual = this.precioanterior - this.descuento;
                    this.descuento_mensaje = 'Este producto tiene el 100% de descuento OJO Gratis';
                    return this.descuento_mensaje
                }else
                if(this.porcentajededescuento < 0)
                {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "No puedes poner un valor menor que 0",
                        footer: '<a href="#">Revisalo por Favor</a>'
                    });
                    this.porcentajededescuento = 0;
                    
                    this.descuento = (this.precioanterior * this.porcentajededescuento) /100;
                    this.precioactual = this.precioanterior - this.descuento;
                    this.descuento_mensaje = '';
                    return this.descuento_mensaje
                }else

                if(this.porcentajededescuento >= 0)
                {
                    this.descuento = (this.precioanterior * this.porcentajededescuento) /100;
                    this.precioactual = this.precioanterior - this.descuento;
                    if(this.porcentajededescuento ==100)
                    {
                        this.descuento_mensaje = 'Este producto tiene el 100% de descuento OJO Gratis';
                    }else{
                        this.descuento_mensaje = 'Hay un descuento de $'+ this.descuento;
                    }

                }
              
                return this.descuento_mensaje;
              
        }
    },
    methods: {

        eliminarimagen(imagen){
            //console.log(imagen);

            Swal.fire({
                title: 'Si vas a eliminar la imagen '+imagen.id+'?',
                text: "Ya se perdera la imagen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "Cancelar!"
              }).then((result) => {
                if (result.isConfirmed) {

                 let url = '/api/eliminarimagen/'+imagen.id;
                 //console.log(url);
                 
                 axios.delete(url).then(response => { 
                    //console.log(response.data);
                 }); 

                  //ELIMINAR EL ELEMENTO  

                  let elemento = document.getElementById('idimagen-'+imagen.id);
                  //console.log(elemento);
                  elemento.parentNode.removeChild(elemento);



                  Swal.fire({
                    title: "Eliminada!",
                    text: "Se borro la imagen.",
                    icon: "success"
                  });
                }
              });
        },

        eliminarprod(id)
        {

            Swal.fire({
                title: 'Si vas a eliminar eL Producto'+' '+id+'?',
                text: "Ya se Borrara para siempre el Producto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "Cancelar!"
              }).then((result) => {
                if (result.isConfirmed) {

                 let url = '/api/eliminarprod/'+id;
                 console.log(url);
                 
                 axios.delete(url).then(response => { 
                    console.log(response.data);
                    location.reload();
                 });  

                  //ELIMINAR EL ELEMENTO  

                  //let elemento = document.getElementById('idimagen-'+imagen.id);
                  //console.log(elemento);
                  //elemento.parentNode.removeChild(elemento);



                  Swal.fire({
                    title: "Eliminada!",
                    text: "Se borro la imagen.",
                    icon: "success"
                  });
                }
              });
        
        },
        
        getProduct(){

            if (this.slug){
                let url= '/api/product/'+this.slug;
                axios.get(url).then(response => {
                    this.div_mensajeslug = response.data;
                    //console.log(this.div_mensajeslug);
                    if(this.div_mensajeslug=='Producto Disponible')
                    {
                        this.div_clase_slug = 'badge badge-success'; 
                        this.desabilitar_boton=1;
                    }else{
                        this.div_clase_slug = 'badge badge-danger'; 
                        this.desabilitar_boton=0;
                    }
                    
                    this.div_aparecer = true;

                    if(document.getElementById('editar'))
                    {
                        if(document.getElementById('nombretemp').innerHTML === this.nombre)
                        {
                            this.desabilitar_boton=0;
                            this.div_mensajeslug = '';
                            this.div_clase_slug = '';
                            this.div_aparecer = false;

                        }
                    }

                })
            }else{
                this.div_clase_slug = 'badge badge-danger'; 
                this.div_mensajeslug ='Escribe Un Producto Por Favor';
                this.desabilitar_boton=1;
                this.div_aparecer = true;
            }
        },

        mensajedit(){
            console.log('diste click');
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "Actualización Realizada",
                showConfirmButton: false,
                timer: 1500
              });
        },

        mensajcreat(){
            console.log('diste click');
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "Datos Guardados Correctamente",
                showConfirmButton: false,
                timer: 1500
              });
        }
    },
    mounted(){


            //this.generardescuento()

        
     
        
            if (document.getElementById('editar'))
            {
                this.nombre = document.getElementById('nombretemp').innerHTML;
                this.precioactual = document.getElementById('precioactual').innerHTML;
                this.precioanterior = document.getElementById('precioanterior').innerHTML;
                this.porcentajededescuento = document.getElementById('porcentajededescuento').innerHTML;
                this.descuento = document.getElementById('descuento').innerHTML;
                this.descuento_mensaje = document.getElementById('descuento_mensaje').innerHTML;
                
                this.deshabilitar_boton=0;

            }
            //console.log(data);
       
    },
    
}); 

export default apiproduct;