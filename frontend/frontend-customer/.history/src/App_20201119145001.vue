<template>
  <v-app app>
    <v-container>
      <Toolbar/>
    </v-container>
    <v-main>
      <router-view></router-view>
    </v-main>
      <Footer/>
       <v-btn
      class="mx-2 justify-end"
      fab
      dark
      small
      color="primary"
    >
      <v-icon dark>
        mdi-minus
      </v-icon>
    </v-btn>
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
