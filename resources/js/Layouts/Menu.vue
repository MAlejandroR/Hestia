<script>

export default {
    name: "menu"
}
</script>
<template>

  <div v-if="$page.props.auth!==null" >
    <a v-if="$page.props.auth.roles[0]==='administrador'" class="boton" href="#">Administrar</a>
  </div>
  <Link class="boton" :href="route('NewUserHestia')">Crearme Usuario</Link>
  <a class="boton" href="#">Doc Hestia</a>
  <a class="boton" href="#">Wiki sobre hestia</a>
</template>



<style scoped>

</style>
