//window.alert("desde admin.js javascript");


import VueTimeago from 'vue-timeago'

Vue.use(VueTimeago, {
  name: 'Timeago', // Component name, `Timeago` by default
  locale: 'en', // Default locale
  // We use `date-fns` under the hood
  // So you can use all locales from it
  locales: {
   'zh-CN': require('date-fns/locale/zh_cn'),
    ja: require('date-fns/locale/ja')
  }
})

const admin = new Vue({
    el:'#admin',
    props:['user_id'],
    data: {
        notifications: []
    },
    computed: {
   
    },
    methods: {

        
    }, 
    mounted(){
        
        window.Echo.channel('pizza-tracker')
        .listen('OrderStatusChangededEvent', (e) =>
        {
            if(this.user_id == ondragover.user_id)
            {
                this.notification.unshift({
                    description: 'order ID: ' + order.id + 'update',
                    url: '/order/' + order.id,
                    time: new Date()
                });
            }    
        });    

        
      
        
    
   
    },


});  