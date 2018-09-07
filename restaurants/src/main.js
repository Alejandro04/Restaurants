import Vue from 'vue'
import VueRouter from 'vue-router' 
import App from './App.vue'
import Home from './Home.vue'
import Favoritos from './Favoritos.vue'
import Restaurantes from './Restaurantes.vue'
import Restaurante from './Restaurante.vue'
import Contacto from './Contacto.vue'

Vue.use(VueRouter)

const routes = [
  {path: '/', component: Home },
  {path: '/restaurantes', component: Restaurantes },
  {path: '/restaurante/:id', component: Restaurante },
  {path: '/favorito/:id', component: Favoritos },
  {path: '/contacto', component: Contacto },
]

const router = new VueRouter({
  routes,
  mode:'history' 
})

Vue.component('home', Home)
Vue.component('favoritos', Favoritos)
Vue.component('restaurantes', Restaurantes)
Vue.component('restaurante', Restaurante)
Vue.component('contacto', Contacto)

new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
