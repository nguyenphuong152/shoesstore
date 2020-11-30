<template>
  <div class="men app">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Men's Product</a>
        <br />
        <a class="title-shoes">Home / Men</a>
      </v-container>
    </v-sheet>
    <v-main>
      <v-container class="app">
         <v-row>
        <v-col cols="3">
          <productCate />
          <productTag/>
        </v-col>
        <v-col>
          <v-container>
            <productView />
          </v-container>
        </v-col>
      </v-row>
      </v-container>
    </v-main>
  </div>
</template>

<script>
import productCate from "../../components/Customer/ProductCategory";
import productView from "../../components/Customer/ProductView";
import productTag from '../../components/Customer/ProductTag';

export default {
  components: {
    productCate,
    productView,
    productTag,
  },
};
</script>
