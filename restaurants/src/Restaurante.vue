<template>
  <div>
    <h2>{{text}}</h2>
     <ul v-if="restaurante != null">
        <p>{{ restaurante.name }}</p>
        <p>{{ restaurante.description }}</p>
      </li>
    </ul>
    <span v-else>Cargando restaurantes..</span>
  </div>
</template>


<script>
import axios from 'axios'

export default {
  name: 'restaurantes-detail',
  mounted(){
    this.id = this.$route.params.id
    this.getRestaurant()
  },
  data () {
    return {
      text: 'Detalle del Restaurante',
      restaurante: null,
      id: null,
    }
  },
  methods:{
    getRestaurant(){  
        console.log("re")
        axios.get('http://localhost:8000/restaurants/'+this.id)
        .then(response =>{
          console.log("rest"+response)
          this.restaurante = response.data.restaurante
        })
        .catch(error =>{
        console.log(error);
        })
    }
  }
}
</script>

