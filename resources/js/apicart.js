//window.alert("desde apicart");

const apicart = new Vue({
    el:'#apicart',
    data: {
        nombre: '',
    },
    computed: {
   
    },
    methods: {

        sumarprod(id)
        {
            
            //window.alert("buscando el id "+id);
           console.log('funcionando');

            /* let formulario = document.getElementById('formulario');
            formulario.addEventListener('submit', function(e){
                console.log('click');
            }); */
            let formulario = document.getElementById('formulario')
            let datos = new FormData(formulario);
            //console.log(datos); 
            console.log(datos.get('quantity')); 
            console.log(datos.get('price')); 

            /* let response = await fetch('/api/cart'+id);
            let user = await response.json();
            
            console.log(user); */

            
            fetch('/api/carrito/',{
                method: 'POST',
                body: datos
            }) 
                
                
                .then(res => res.json)    
                .then( data => {
                    console.log(data)
                })

           

                


        }
    }


});  

//export default apicart;