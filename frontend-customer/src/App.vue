<template>
  <v-app app>
    <v-container>
      <Toolbar/>
    </v-container>
    <v-main>
      <router-view></router-view>
    </v-main>
      <Footer/>
  </v-app>
  
</template>

<script>

import Footer from "./components/Footer";
import Toolbar from "./components/Toolbar";

export default {
  name: "App",

  components: {
    Toolbar,
    Footer
  },

  data: () => ({
    //
  }),
};
</script>
