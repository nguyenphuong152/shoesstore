<template>
  <v-app grey-lighten 4 >
    <NavBar/>
    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script>
import NavBar from "./components/NavBar";

export default {
    name:'App',
    components: {NavBar},
    data(){
      return {

      }
    }
}
</script>

<style>

</style>