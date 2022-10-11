<template>

  <Layout :login=login :user=user :opciones=opciones>
    <h1>contenido de la página</h1>
  </Layout>
</template>

<script>
import Layout from "@/Layouts/Layout.vue";
import Menu from "@/Layouts/Menu.vue";

export default {
  components: {Layout},
  props: {
    login: Boolean,
    user: String,
    opciones: Array
  },
};
</script>
<style scoped>

</style>

