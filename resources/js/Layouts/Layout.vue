<template>
  <header class="flex flex-row justify-between items-center
    h-15v bg-gray-200 m-1 p-2 rounded ">
    <a class="h-15v" href="https://cpilosenlaces.com/">
      <img class="max-h-full " src="images/logo.png" alt="logo"/>
    </a>
    <div v-if="msj">
        <h1>{{ msj }}</h1>
    </div>
    <span class=" h-15v flex flex-row justify-start">

            <span class="bg-white rounded-full">
                <a class="h-15v" href="https://hestiacp.com/">
                      <img class="max-h-full" src="images/logo_hestia.png" alt="logo hestia"/>
                </a>
                </span>
            <h1 class=" max-h-full text-hestia font-serif text-6xl text-gray-800 ">
                  Gestión Hestia
            </h1>
         </span>
            <form class="p-4" action="">

                <input size="10" type="text" name="email" placeholder="email" id="emall">
                <input size="10" type="text" name="pass" placeholder="password" id="pass">
                <br/>
              <h2>Valor de login es -{{login}}-</h2>
              <div v-if=!login>
                <Link class="boton" method="get" :href="route('login')">Login</Link>
                <Link class="boton" method="get" :href="route('register')">Registrarse</Link>
              </div>
              <div v-else>
                <Link class="boton" method="post" :href="route('logout')">Logout</Link>
              </div>


            </form>


  </header>
  <nav class="flex flex-row justify-start items-center  h-10v">
    <menu>
      <!--Pasar un array de opciones para el menu -->
      <a class=boton href="#" v-for="(opcion, index) in opciones">
        {{ opcion }}
      </a>

    </menu>

  </nav>
  <main class="flex flex-col justify-center items-center bg-blue-300 h-65v">
   <slot/>
  </main>
  <footer class="flex flex-col justify-center items-center h-10v bg-gray-200 ">
    <h1 class="text-4xl text-gray-500 mx-20">@ copy right</h1>
  </footer>

</template>

<script>
import menu from "@/Layouts/Menu.vue";
import {Link} from '@inertiajs/inertia-vue3'


export default {
  name: "Layout",
  components: {
    menu, Link
  },
  props: {
    login: Boolean,
    user: String,
    opciones: Array,
    msj: String,


  }
}
</script>

<style scoped>

</style>
