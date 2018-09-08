<template>
  <div>
      <form v-on:submit.prevent="guardarRestaurante">
        <p>
            <label>Nombre</label>
            <input type="text" v-model="restaurante.nombre">
        </p>
        <p>
            <label>Descripción</label>
            <input type="text" v-model="restaurante.descripcion">
        </p>
        <p>
            <input type="submit">
        </p>   
      </form>
  </div>
</template>


<script>
import axios from 'axios'

export default {
    name: 'restaurante-add',
    mounted(){

    },
    data(){
        return{
            restaurante:{
                nombre: '',
                descripcion: '',
            }
        }
    },
    methods: {
        guardarRestaurante(){
            console.log(this.restaurante)
            axios.post("http://localhost:8000/restaurante", this.restaurante)
                .then((response) =>{
                    console.log(response)
                })
                .catch((error)=>{
                    console.log(error)
                })
        }
    }
}
</script>


