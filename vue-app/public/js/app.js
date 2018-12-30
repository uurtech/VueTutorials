new Vue({
   el: "#app",

   data: {
       skills : []
   },


   mounted(){
    axios.get('/skills').then(response => this.skills = response.data );
   }    
});