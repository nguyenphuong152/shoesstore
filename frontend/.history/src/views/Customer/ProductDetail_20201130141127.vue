<template>
  <div class="app">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Product Detail</a>
        <br />
        <a class="title-shoes">Home / Product Detail</a>
      </v-container>
    </v-sheet>
  <v-container>
    <v-row>
       <v-col>
      <ImageView/>
    </v-col>
    <v-col>
      <ImageView/>
    </v-col>
    </v-row>
   


  </v-container>
  </div>
</template>

<script>
import ImageView from "../../components/Customer/ProductImage";
export default {
 components: { ImageView },
};
</script>

<style></style>
