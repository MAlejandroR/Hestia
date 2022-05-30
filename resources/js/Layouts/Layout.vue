<template>
    <header class="flex flex-row justify-between items-center
    h-15v bg-gray-200 m-1 p-2 rounded ">
        <a class="h-15v" href="https://cpilosenlaces.com/">
            <img class="max-h-full " src="images/logo.png" alt="logo"/>
        </a>
        <span class=" h-15v flex flex-row justify-start">

            <span class="bg-white rounded-full">
                <a class="h-15v" href="https://hestiacp.com/">
                      <img class="max-h-full" src="images/logo_hestia.png" alt="logo hestia"/>
                </a>
                </span>
            <h1 class=" max-h-full text-hestia font-serif text-8xl text-gray-800 ">
                  Gestión Hestia
            </h1>
         </span>
        <span v-if="login">


        </span>
        <span v-else>
            <form action="">
                
                <input type="text" name="email" placeholder="email" id="emall">
                <input type="text" name="pass" placeholder="password" id="pass">
                <br />
                <input type="submit" value="login">
                <Link href="register'">Registrarse</Link>

                <a href=""></a><input type="submit" value="register">
            </form>
            </span>


    </header>
    <nav class="flex flex-col justify-start items-center p-8 h-10v">
        <menu>
            <a href="#">Administrar</a>
            <a href="#">Crearme Usuario</a>
            <a href="#">Doc Hestia</a>
            <a href="#">Wiki sobre hestia</a>
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
import { Link } from '@inertiajs/inertia-vue3'


export default {
    name: "Layout",
    components: {
        menu, Link
    }
}
</script>

<style scoped>

</style>
