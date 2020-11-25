<template>
  <v-app app>
    <v-container v-if="![ 'Banner', 'Category','Product','ManageUser','OrderList','Dashboard'].includes($route.name)">
      <Toolbar />
    </v-container>
    <v-main>
      <router-view></router-view>
    </v-main>
      <Footer v-if="!['Admin', 'Banner', 'Category','Product','ManageUser','OrderList','Dashboard'].includes($route.name)"/>
  </v-app>
  
</template>

<script>

import Footer from "./components/Customer/Footer";
import Toolbar from "./components/Customer/Toolbar";

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
