<script>

export default {
    name: "Header"
};
defineProps({
    login: Boolean,
    user: Object
});
</script>

<template>
    <header class="bg-header h-15v flex flex-row justify-between items-center p-8">
        <img class="max-h-full" src="images/logo.png" alt="logo" />
        <h1 class="max-h-full text-6xl text-red-100">Gestión de Hestia (Web Domains)</h1>
        <div class="logueo">
            <span v-if="login">
            <h3>Usuario {{ usuario.name }}</h3>
                <!--            <form action="{{route("logout")}}" method="post">-->
                <form action="logout" method="POST">

                    <input type="submit" value="logout">
                </form>
            </span>
            <span v-else>

            <form action='login' method="POST">
                <x-input type="text" value="" name="email" class="text-xs" size="10"
                         placeholder="email"/>
                <x-input type="text" name="password" class="text-xs" size="10" placeholder="password"/>
                <br><br>
                <x-button>Login</x-button>
                <x-ancla ref='register'>
                    Registrarse
                </x-ancla>
                <div>Datos incorrectos, vuévelo a intentar</div>
            </form>
            </span>
        </div>
    </header>

</template>


<style scoped>

</style>
