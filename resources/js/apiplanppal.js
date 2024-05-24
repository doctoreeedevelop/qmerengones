//window.alert("desde apiplanppal");

const apiplanppal = new Vue({
    el:'#apiplanppal',
    data: {
        nombre: '',
    },
    computed: {
   
    },
    methods: {

        agregoalcart(id)
        {
            
           //window.alert("buscando el id "+id);
           console.log('funcionando');
           //console.log('diste click');
           
           Swal.fire({
               position: "top-center",
               icon: "success",
               title: "Se Adiciono Al Carrito",
               showConfirmButton: false,
               timer: 2000
             });

             
        }
    }


});  

//export default apicart;