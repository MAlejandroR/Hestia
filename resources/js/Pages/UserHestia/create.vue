<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';

</script>

<template>
  <!--    Iniciar sesión para acceder-->
  <div class="container flex flex-col justify-center items-center ">
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Usuario
          </label>
          <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="username" type="text" placeholder="Nombre de usuario">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input
              class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
              id="password" type="password" placeholder="******************">
          <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input
              class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
              id="email" type="password" placeholder="email" name="email">
          <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="mb-6">
          <label class="block
                text-gray-700 text-sm font-bold mb-2"
                 for="first_name">
            Nombre
          </label>
          <input class="shadow
                appearance-none border border-red-500 rounded
                 w-full py-2 px-3 text-gray-700 mb-3
                  leading-tight focus:outline-none focus:shadow-outline"
                 id="first_name" type="text" placeholder="nombre" name="fist_name">

        </div>
        <div class="mb-6">
          <label class="block
                text-gray-700 text-sm font-bold mb-2"
                 for="last_name">
            Apellido
          </label>
          <input class="shadow
                appearance-none border border-red-500 rounded
                 w-full py-2 px-3 text-gray-700 mb-3
                  leading-tight focus:outline-none focus:shadow-outline"
                 id="last_name" type="text" placeholder="apellido" name="last_name">
        </div>
        <!-- El profesor será el que ponga el dominio
        $table->string('domain');
       El ciclo habrá que establecerlo previamente el profesor
        $table->string('ciclo');
        $table->string('curso');
        $table->string('estado'); //pendiente de crear o creado en hestia
-->

        <div class="flex items-center justify-between">
          <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="button">
            Guardar
          </button>
          <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="button">
            Cancelar
          </button>
          <!--                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">-->
          <!--                    Forgot Password?-->
          <!--                </a>-->
        </div>
      </form>

    </div>

  </div>
</template>

<style scoped>

</style>
