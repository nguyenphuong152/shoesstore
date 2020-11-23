<template>
  <v-toolbar extended flat>
    <v-row>
      <v-col cols="2">
        <v-toolbar-title id="logo">MEGO</v-toolbar-title>
      </v-col>
      <v-col class="d-flex justify-space-around">
          <v-container class="nav">
                 <router-link to="/">Home</router-link>
         <router-link to="/men">Men</router-link>
         <router-link to="/women">Women</router-link>
         <router-link to="/about">About</router-link>
         <router-link to="/contact">Contact</router-link>
          </v-container>
      </v-col>
      <v-col cols="3" class="d-flex justify-end">
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
