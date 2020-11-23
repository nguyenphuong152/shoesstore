<template>
  <div id="app">
    <div>
      <v-card flat height="200px" tile>
        <v-toolbar extended extension-height="80">
          <v-toolbar-title id="logo">MewGo</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items id="searchbar">
            <v-text-field
              v-model="search"
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
      </v-content>
      <router-view />
    </div>
     <v-footer>
      <Footer />
    </v-footer>
  </div>
  
</template>

<script>
import Banner from "./components/Banner";
import Footer from "./components/Footer";

export default {
  name: "App",

  components: {
    Banner,
    Footer
  },

  data: () => ({
    //
  }),
};
</script>
