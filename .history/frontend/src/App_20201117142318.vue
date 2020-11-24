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
            <div align = "right">
              <v-btn icon>
                <v-icon>mdi-cart</v-icon>
              </v-btn>
              <router-link to="/cart">Cart</router-link>
            </div>
          </v-button-items>
        </v-card>
      </v-card>
    </div>
    <v-content>
      <Banner />
    </v-content>
    <router-view />
  </div>
</template>

<script>
import Banner from "./components/Banner";

export default {
  name: "App",

  components: {
    Banner,
  },

  data: () => ({
    //
  }),
};
</script>
