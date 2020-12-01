<template>
  <div class="app">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Product Detail</a>
        <br />
        <br />
        <a class="title-shoes">Home / Product Detail</a>
      </v-container>
    </v-sheet>
    <v-container>
      <v-row>
        <v-col cols="5">
          <imageView />
        </v-col>
        <v-divider vertical></v-divider>
        <v-col>
          <productInfo />
          <colorSwatch />
          <size />
          <v-row class="d-flex align-baseline">
            <v-col class="text-start">
              <v-row class="d-flex align-baseline">
                <v-col cols="8">
                  <span class="admin">Quantity:</span>
                </v-col>
                <v-col>
                  <v-text-field outlined></v-text-field>
                </v-col>
              </v-row>
            </v-col>
            <v-col cols="3">
              <v-btn color="teal" class="ma-2 white--text admin">
                Add to cart
                <v-icon right dark>
                  mdi-cart
                </v-icon>
              </v-btn>
            </v-col>
          </v-row>
          <v-row class="d-flex align-baseline">
            <v-col class="text-start">
              <span class="admin">Rate this product:</span>
            </v-col>
            <v-col class="d-flex">
              <span> ({{ rating }}) </span>
              <v-rating
                v-model="rating"
                background-color="black"
                color="yellow accent-4"
                dense
                half-increments
                hover
                size="18"
              ></v-rating>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
      <v-divider></v-divider>
      <productDiscription />
    </v-container>
  </div>
</template>

<script>
import imageView from "../../components/Customer/ProductImage";
import productInfo from "../../components/Customer/ProductInfo";
import colorSwatch from "../../components/Customer/ColorSwatch";
import size from "../../components/Customer/Size";
import productDiscription from "../../components/Customer/ProductDiscription";

export default {
  components: { imageView, productInfo, colorSwatch, size, productDiscription },
  data() {
    return {
      rating: "5",
    };
  },
};
</script>

<style></style>
