<template>
  <v-toolbar extended flat>
    <v-row class="d-flex align-baseline">
      <v-col cols="4" class="d-flex justify-lg-start">
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

        <v-btn icon>
          <v-icon>mdi-account-outline</v-icon>
        </v-btn>
        <v-divider vertical inset></v-divider>
        <v-btn icon>
          <v-icon>mdi-cart-outline</v-icon>
        </v-btn>
      </v-col>
    </v-row>
  </v-toolbar>
</template>

<script>
export default {};
</script>

<style></style>
