<template>
    <header class="flex flex-row justify-between items-center h-15v bg-gray-200 ">
        <img src="images/logo.png" alt="logo">
        <h1 class="text-6xl text-gray-800 mx-20">Gestion inicial</h1>
    </header>
    <nav class="flex flex-col justify-start items-center p-8 h-10v">
        <menu>
            <a href="#">Opcion1 en layout</a>
        </menu>

    </nav>
    <main class="flex flex-col justify-center items-center bg-blue-300 h-65v">
        <slot />
    </main>
    <footer class="flex flex-col justify-center items-center h-10v bg-gray-200 ">
        <h1 class="text-4xl text-gray-500 mx-20">@ copy right</h1>
    </footer>

</template>

<script>
import menu from "@/Layouts/Menu.vue";
export default {
    name: "layoutprueba1",
    components:{
        menu
    }
}
</script>

<style scoped>

</style>
