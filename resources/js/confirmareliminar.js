//window.alert("desde confirmar eliminar.js");
export let name = 'nelson el mejor';



const confirmareliminar = new Vue({
    el:'#confirmareliminar',
    data: {
        urlaeliminar: '',
       
    },
    
    methods: {
        
      eliminarcate(id)
      {

          Swal.fire({
              title: 'Si vas a eliminar La Categoria'+' '+id+'?',
              text: "Ya se Borrara para siempre esta Categoria!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Si, Eliminar!",
              cancelButtonText: "Cancelar!"
            }).then((result) => {
              if (result.isConfirmed) {

               let url = '/api/eliminarcat/'+id;
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
                  text: "Se Borro la Categoria.",
                  icon: "success"
                });
              }
            });
      
      }
    }
}); 
