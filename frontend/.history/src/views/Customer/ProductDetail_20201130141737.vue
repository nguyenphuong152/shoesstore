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
       <v-col cols="5">
      <ImageView/>
    </v-col>
    <v-divider vertical></v-divider>
    <v-col>
     <ProductInfo/>
    </v-col>
    </v-row>
   


  </v-container>
  </div>
</template>

<script>
import ImageView from "../../components/Customer/ProductImage";
import ProductInfo from "../../components/Customer/ProductInfo";
export default {
 components: { ImageView , ProductInfo},
};
</script>

<style></style>
