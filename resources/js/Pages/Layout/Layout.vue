<template>
    <header class="h-15v bg-gray-200
    flex flex-row justify-between items-center
    px-5
    rounded-lg border border-red-700">
        <img class="max-h-full" src="images/logo.png" alt="logo">
        <h1 class="text-green-600 text-4xl max-h-full">Titulo</h1>
        <layout-login :logueado="logueado" :user="user"/>
    </header>
    <nav>
        <inertia-link class="boton">Crear Usuario</inertia-link>
        <inertia-link class="boton">Información</inertia-link>
        <inertia-link class="boton">Administrar</inertia-link>
        <inertia-link class="boton" href="/logout" method="post" as="button" type="button">Logout</inertia-link>

    </nav>
    <main>
        <slot />
    </main>
    <footer>

    </footer>
</template>

<script>
import LayoutLogin from "./LayoutLogin";
export default {
    name: "LayoutHeader",
    components:{
        LayoutLogin,
    },
    props  :['logueado', 'user']
}
</script>

<style scoped>

</style>
