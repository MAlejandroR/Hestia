<script>
import header from "./Header";


export default {
    name: "Layout",
    props:['login', 'user'],
    components: {
        header
    }
};

</script>

<template>
    <h1>En layout</h1>
   <header  :login=login :user=user  />
    <nav class="bg-nav h-10v">
        <menu />
<!--        @yield("menu")-->
    </nav>
    <main class="bg-main h-65v flex flex-col p-10">
<!--        @yield("contenido")-->
    </main>
    <footer class="h-10v bg-footer">
        @ pie de página
    </footer>

</template>


<style scoped>

</style>
