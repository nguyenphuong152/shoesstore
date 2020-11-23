<template>
  <v-app app>
    <v-container>
      <Toolbar/>
    </v-container>
    <v-main>
      <Banner/>
      <router-view></router-view>
    </v-main>
  </v-app>
  
</template>

<script>
import Banner from "./components/Banner";
// import Footer from "./components/Footer";
import Toolbar from "./components/Toolbar";

export default {
  name: "App",

  components: {
    Toolbar,
    Banner,
    // Footer
  },

  data: () => ({
    //
  }),
};
</script>
