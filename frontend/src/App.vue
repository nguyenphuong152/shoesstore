<template>
<<<<<<< HEAD
  <v-app app>
    <v-container v-if="!['Admin', 'Banner', 'Category','Product','ManageUser','OrderList','Dashboard'].includes($route.name)">
      <Toolbar />
    </v-container>
    <v-main>
      <router-view></router-view>
    </v-main>
      <Footer v-if="!['Admin', 'Banner', 'Category','Product','ManageUser','OrderList','Dashboard'].includes($route.name)"/>
  </v-app>
=======
  <div id="app">
      <v-card flat height="200px" tile>
        <v-toolbar extended extension-height="80">
          <v-toolbar-title id="logo">MewGo</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items id="searchbar">
            <v-text-field
              append-icon="mdi-magnify"
              label="Search"
              outlined
              single-line
              hide-details
            ></v-text-field>
          </v-toolbar-items>
        </v-toolbar>
        <v-card flat tile class="nav">
          <v-button-items>
            <router-link to="/">Home</router-link>
            <router-link to="/men">Men</router-link>
            <router-link to="/women">Women</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/contact">Contact</router-link>
            <router-link to="/cart" id="shopping-cart">Cart</router-link>
            <router-link to="/account">Account</router-link>
          </v-button-items>
        </v-card>
      </v-card>
      <v-content>
         <Banner />
       <router-view></router-view>
      </v-content>
     <v-footer>
      <Footer />
    </v-footer>
  </div>
>>>>>>> e5b2ba6... design home but get sth wrong in router
  
</template>

<script>
<<<<<<< HEAD

import Footer from "./components/Customer/Footer";
import Toolbar from "./components/Customer/Toolbar";
=======
import Banner from "./components/Banner";
import Footer from "./components/Footer";
>>>>>>> e5b2ba6... design home but get sth wrong in router

export default {
  name: "App",

  components: {
<<<<<<< HEAD
    Toolbar,
=======
    Banner,
>>>>>>> e5b2ba6... design home but get sth wrong in router
    Footer
  },

  data: () => ({
    //
  }),
};
</script>
