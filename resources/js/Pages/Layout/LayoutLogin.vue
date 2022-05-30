
<script>
import { Link } from '@inertiajs/inertia-vue3';
import {useForm} from "@inertiajs/inertia-vue3";


export default {
    name: "LayoutLogin",
    props: ['logueado', 'user'],
    methods: {
        login: function () {
            alert("Esto es el login");
        },
        logout: function () {
            alert("Esto es el logout");
        }
    },


}
const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Link href="/logout" method="post" as="button" type="button">
        Logout
    </Link>
    <h1>Login en LayoutLogin</h1>
    <span v-if="logueado">
        Logueado como {{ user.name() }}
        <button @click="logout">Logout</button>

    </span>
    <span v-else>
        <Link href="/logout" method="post" as="button" type="button">
            Logout
        </Link>
        <Link :href="route('login')" class="text-sm text-gray-700 underline">
            <span class="text-green-600">Log in</span>
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>

        <form prevent-default-action @click="login" >
            <input type="text" name="email" id="email">
            <input type="text" name="password" id="password">
            <input type="submit" value="Login">
            </form>
    </span>
</template>

<style scoped>

</style>
