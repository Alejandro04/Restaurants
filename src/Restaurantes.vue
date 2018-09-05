<template>
  <div>
    <h2>{{text}}</h2>
    <ul v-if="restaurantes != null">
      <li v-for='(rest, index) in restaurantes' :key='index'> </li>
        <strong>{{restaurant.nombre}}</strong>
      </li>
    </ul>
    <span v-else>Cargando restaurantes..</span>
  </div>
</template>


<script>
import axios from 'axios'

export default {
  name: 'restaurantes',
  mounted(){
    this.gerRestaurants()
  },
  data () {
    return {
      text: 'Lading de restaurantes',
      restaurantes: null,
    }
  },
  methods:{
    gerRestaurants(){
      axios.get('/restaurants')
        .then(function (response) {
          console.log(response);
          this.restaurantes = response.data
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  }
}
</script>
