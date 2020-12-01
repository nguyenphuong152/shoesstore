<template>
  <v-toolbar flat>
    <v-row class="d-flex align-baseline">
      <v-col cols="3" class="d-flex justify-lg-start">
        <v-toolbar-title id="logo">MEGO</v-toolbar-title>
      </v-col>
      <v-col class="d-flex justify-space-around text-start nav">
        <router-link to="/">Home</router-link>
        <router-link to="/men">Men</router-link>
        <router-link to="/women">Women</router-link>
        <router-link to="/about">About</router-link>
        <router-link to="/contact">Contact</router-link>
      </v-col>
      <v-col cols="2" class="d-flex justify-end">
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
        <v-menu
          open-on-hover
          top
          offset-y
          :position-x="1000"
          :position-y="230"
          absolute
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn icon v-bind="attrs" v-on="on">
              <v-icon>mdi-account-outline</v-icon>
            </v-btn>
          </template>

          <v-list class="text-start nav">
            <v-list-item v-for="(item, index) in routes" :key="index" :to="item.path">
              <v-list-item-title>{{ item.name }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
        <v-divider vertical inset></v-divider>
        <v-btn icon @click="goToCart">
          <v-icon>mdi-cart-outline</v-icon>
        </v-btn>
      </v-col>
    </v-row>
  </v-toolbar>
</template>

<script>
export default {
  data: () => ({
    routes: [
      { 
        path:"/checkout",
        name:"Check Out"
       },
       { 
        path:"/account",
        name:"My Account"
       },
       { 
        path:"/userlogin",
        name:"User Login"
       },
      
    ],
  }),
  methods: {
     goToCart: function() {
     this.$router.push({name: 'Cart'})
     }
  }
};
</script>

<style></style>
