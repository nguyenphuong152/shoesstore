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
      <v-row>
        <v-col cols="3">
          <productCate />
        </v-col>
        <v-col>
          <v-container>
               <bestseller />
          </v-container>
        </v-col>
      </v-row>
    </v-main>
  </div>
</template>

<script>
import productCate from "../components/ProductCategory";
import bestseller from "../components/BestSeller";

export default {
  components: {
    productCate,
    bestseller,
  },
};
</script>
