<template>
  <v-app app >
    <v-appbar>
       <NavBar/>
    </v-appbar>
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