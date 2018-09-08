<template>
  <div>
    <h2>{{text}}</h2>
     <ul v-if="restaurantes != null" class="list">
      <li v-for="item in restaurantes">
        <strong>{{ item.name }}</strong>
      </li>
    </ul>
    <span v-else>Cargando restaurantes..</span>

     <!--
    <ul v-if="restaurantes != null" class="list">
      <li v-for='(rest, index) in restaurantes' :key='index'> </li>
        <strong>{{restaurant.nombre}}</strong>
        <p><router-link :to= "{name: 'restaurant', params: {id:restaurant.nombre}}">Ver</router-link></p>
        <p><router-link :to= "{name: 'restaurant-edit', params: {id:restaurant.nombre}}">Editar</router-link></p>
      
      </li>
    </ul>
    <span v-else>Cargando restaurantes..</span>
      -->
  </div>
</template>


<script>
import axios from 'axios'

export default {
  name: 'restaurantes',
  created(){
    this.getRestaurants()
  },
  data () {
    return {
      text: 'Lading de restaurantes',
      restaurantes: null,
    }
  },
  methods:{
    getRestaurants(){  
        axios.get('http://localhost:8000/api/restaurants')
        .then(response =>{
          this.restaurantes = response.data.restaurants
        })
        .catch(error =>{
        console.log(error);
        })
    }
  }
}
</script>

<style>
  .list{
    padding: 5px;
  }
  .list > li{
      margin-top: 10px;
      width: 30%;
      height: 120px;
      border: 1px solid #ddd;
      background: #eee;
      padding: 20px;
      overflow: hidden;
  }
</style>

