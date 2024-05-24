//window.alert("desde apicategory si.js");
//export let name = 'nelson el mejor';



const apicategory = new Vue({
    el:'#apicategory',
    data: 
    {
        nombre: '',
        slug: '',
        div_mensajeslug: 'La Categoria Ya!, Existe',
        div_clase_slug: 'badge badge-danger',
        div_aparecer: false,
        /* desabilitar_boton: 1 */
    },
    computed: 
    {
        generarSlug : function()
        {
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
    methods: 
    {
        getCategory()
        {

            
            if(this.slug)
            { 
                let url= '/api/category/'+this.slug;
                axios.get(url).then(response =>
                {
                    //console.log(response.data);
                    this.div_mensajeslug = response.data;
                    //console.log(this.div_mensajeslug);
                    if(this.div_mensajeslug === "Categoria Disponible")
                    {
                        this.div_clase_slug = 'badge badge-success'; 
                       /*  this.desabilitar_boton=0;  */
                    }else{
                            this.div_clase_slug = 'badge badge-danger'; 
                            /* this.desabilitar_boton=1; */
                    }
                    this.div_aparecer = true;

                    if(document.getElementById('editar'))
                    {
                        if(document.getElementById('nombretemp').innerHTML === this.nombre)
                        {
                                    /* this.desabilitar_boton=0; */
                                    this.div_mensajeslug = '';
                                    this.div_clase_slug = '';
                                    this.div_aparecer = false;
        
                        }
                    } 
                })
            }else{
                this.div_clase_slug = 'badge badge-danger'; 
                this.div_mensajeslug ='Escribe Una Categoria Por Favor';
                /* this.desabilitar_boton=1; */
                this.div_aparecer = true;
            }  
        },
        guardarcat()
        {
            
            //alert(id);
            //this.urlaeliminar = document.getElementById('urlbase').innerHTML+'/'+id;
            //alert(this.urlaeliminar);

            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "Categoria Guardada",
                showConfirmButton: false,
                timer: 1600
              });
             
            
        },

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
        }

        
    },
    //NOTA MOUNTED ES LO PRIMERO QUE SE EJECUTA EN CICLO DE VIDA DE VIU
    mounted(){

        
        
        if (document.getElementById('editar'))
        {
            this.nombre = document.getElementById('nombretemp').innerHTML;           
           /*  this.deshabilitar_boton=0; */
 
        }
        
    
   
    },
}); 
export default apicategory;

//define([], function(){

    //return apicategory;

//});