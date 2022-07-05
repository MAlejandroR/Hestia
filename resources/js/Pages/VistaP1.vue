<template>
  <Layout :login=login :user =user>
    <h1>Soy vista 1</h1>
    <inertia-link rel="stylesheet" :href="route('v2')">Ir a vista 2
    </inertia-link>
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

