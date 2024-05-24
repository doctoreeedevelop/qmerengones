//window.alert("desde checkout.js");

const checkout = new Vue({
    el:'#checkout',
    data: {
        urlaeliminar: '',
       
    },
    
    methods: {
        
      compracheck()
      {
        
          console.log('funcionando check');
          
          Swal.fire({
              title: '¡listo Has realizado la compra.!',
              text: "Ya Estamos Laborando para Entregartelo",
              icon: "success",
              showCancelButton: false,
              showConfirmButton: false,
              /* confirmButtonColor: "#3085d6", */
              /* cancelButtonColor: "#d33", */
              /* confirmButtonText: "ok!", */
              /* cancelButtonText: "Cancelar!" */
              timer: 3000
            }).then((result) => {
              if (result.isConfirmed) {

               /* let url = '/api/eliminarcat/'+id;
               console.log(url); */
               
              /*  axios.delete(url).then(response => { 
                  console.log(response.data);
                  location.reload();
               });  */ 

                //ELIMINAR EL ELEMENTO  

                //let elemento = document.getElementById('idimagen-'+imagen.id);
                //console.log(elemento);
                //elemento.parentNode.removeChild(elemento);



                Swal.fire({
                 /*  title: "Eliminada!",
                  text: "Se borro la imagen.", */
                 /*  icon: "success" */
                });
              }
            });
      
      }
    }
}); 
