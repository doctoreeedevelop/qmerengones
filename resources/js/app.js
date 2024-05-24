//window.alert("desde app.js");
//import category from './apicategory.js';
//import product from './apiproduct.js';
//console.log(category);

//window.Vue = require('vue');

import './bootstrap';

//require(['apicategory'], function(){
//});
     
/* if(document.getElementById('apiheadplanppal')){
    import('./apiheadplanppal.js');
 } */

 if(document.getElementById('apiplanppal')){
    import('./apiplanppal.js');
 }


if(document.getElementById('apicategory')){
   import('./apicategory.js');
}
  
        
if(document.getElementById('apiproduct')){
    import('./apiproduct.js');
 }
  
 if(document.getElementById('confirmareliminar')){
    import('./confirmareliminar.js');
 } 

 if(document.getElementById('apicart')){
    import('./apicart.js');
 } 
 
 if(document.getElementById('crear')){
    import('./crear.js');
 } 
 
 if(document.getElementById('funciones')){
    import('./funciones.js');
 }

 if(document.getElementById('formregister')){
    import('./formregister.js');
 } 

 if(document.getElementById('admin')){
    import('./admin.js');
 } 

 if(document.getElementById('checkout')){
    import('./checkout.js');
 }

//import './comun';


//suena = import './apicategory';
//import './apiproduct';
//import './apicategory';

//if(document.getElementById('apicategory'))
//{
   //window.alert("dentro si api categori");
   //console.log(category);
  // require('./apicategory');
   //include('./apicategory');
   //const Web3 = require('./apicategory');
   //import Web3 from 'web3';
   //<script src="http://127.0.0.1:8000/resources/js/apicategory.js"></script>
  

  
   
//}
//if(document.getElementById('apicategory'))
//{
//    require('./apicategory');


/*
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
    },
    mounted(){

        
        
        if (document.getElementById('editar'))
        {
            this.nombre = document.getElementById('nombretemp').innerHTML;
            this.deshabilitar_boton=0;

        }
        
    
   
    }
});
*/


/*


const apiproduct = new Vue({
    el:'#apiproduct',
    data: {
        nombre: '',
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
        
        getProduct(){

            if (this.slug){
                let url= '/api/product/'+this.slug;
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
                this.div_mensajeslug ='Escribe Un Producto Por Favor';
                this.desabilitar_boton=1;
                this.div_aparecer = true;
            }
        }
    },
    mounted(){

        
        
        if (document.getElementById('editar'))
        {
            this.nombre = document.getElementById('nombretemp').innerHTML;
            this.deshabilitar_boton=0;

        }
        console.log(data);
    
   
    }
});

//Swal.fire("SweetAlert2 is working!");

$('.formulario-eliminar').submit(function(e){
        
    e.preventDefault();
    
    
    
    Swal.fire({
        title: "Esta Seguro?",
        text: "Se Eliminara El ROL!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar!",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {

            Swal.fire({
                title: "Eliminado!",
                text: "Se ha eliminado Satisfactoriamente.",
                icon: "success"
              });




            this.submit();
        }
    });
    
});*/