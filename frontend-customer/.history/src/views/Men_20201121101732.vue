<template>
  <div class="men">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Men's Product</a>
        <br />
        <a class="title-shoes">Home / Men</a>
      </v-container>
    </v-sheet>
    <v-main>
        <productCate/>
        <best-seller/>
    </v-main>
  </div>
</template>

<script>
 import productCate from"../components/ProductCategory";
 import bestseller from "../components/BestSeller";
import BestSeller from '../components/BestSeller.vue';

export default {
 components:{
   productCate,
   bestseller
  BestSeller
 }
}
</script>