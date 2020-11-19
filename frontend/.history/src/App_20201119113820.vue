<template>
  <!-- <div id="app"> -->
      <!-- <v-card flat height="200px" tile>
        <v-toolbar extended extension-height="80">
          <v-toolbar-title id="logo">MEGO</v-toolbar-title>
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
    </v-footer> -->
  <!-- </div> -->
  <v-app app color="priamry">
    <v-container>
      <Toolbar/>
    </v-container>
    <v-main>
      <v-container>Hello</v-container>
    </v-main>
  </v-app>
  
</template>

<script>
// import Banner from "./components/Banner";
// import Footer from "./components/Footer";
import Toolbar from "./components/Toolbar";

export default {
  name: "App",

  components: {
    Toolbar
    // Banner,
    // Footer
  },

  data: () => ({
    //
  }),
};
</script>
