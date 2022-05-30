<template>

    <Layout :login=login :user =user>
        <h1>contenido de la página</h1>
    </Layout>
</template>

<script>
import Layout from "@/Layouts/Layout.vue";
export default {
    components: { Layout},
    props: {
        login: Boolean,
        user: String,
    },
};
</script>
<style scoped>

</style>

