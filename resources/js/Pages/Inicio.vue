<template>

  <Layout :login=login :user=user :opciones=opciones>

    <div class="card w-96 bg-base-100 shadow-xl image-full">
      <figure><img height="50" width="100" src="/images/alumna.jpg" alt="Registrarme" /></figure>

      <div class="card-body">
        <h2 class="card-title">Soy alumna!</h2>
        <div class="card-actions justify-end">
          <button @click="register_alumno" class="btn btn-primary">Registrarme ahora</button>
        </div>
      </div>
    </div>
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
  methods:{
    register_alumno:function(){

    }
  }
};
</script>
<style scoped>

</style>

