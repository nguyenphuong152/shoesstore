<template>
  <div class="cart app">
    <v-sheet color="grey lighten-3" height="120">
      <v-container py-8>
        <a class="slogan-3">Cart</a>
      </v-container>
    </v-sheet>
    <div>
      <v-container>
        <totalProducts />
        <v-divider></v-divider>
        <v-row>
          <v-col> </v-col>
          <v-col cols="4">
            <addCoupons />
          </v-col>
        </v-row>
        <v-row>
          <v-col>
            <cartTotals />
          </v-col>
          <v-col cols="4">
            <addCoupons />
          </v-col>
        </v-row>
      </v-container>
    </div>
  </div>
</template>

<script>
import totalProducts from "../../components/Customer/TotalProducts";
import addCoupons from "../../components/Customer/AddCoupon";
import cartTotals from "../../components/Customer/TotalProducts";

export default {
  components: { totalProducts, addCoupons },
  data() {},
};
</script>
