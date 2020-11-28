<template>
  <div class="cart app">
    <v-sheet color="grey lighten-3" height="120">
      <v-container py-8>
        <a class="slogan-3">Cart</a>
      </v-container>
    </v-sheet>
    <div>
      <v-container>
        <v-row>
          <totalProducts />
        </v-row>
        <v-row>
          <addCoupons />
        </v-row>
      </v-container>
    </div>
  </div>
</template>

<script>
import totalProducts from "../../components/Customer/TotalProducts";
import addCoupons from "../../components/Customer/AddCoupon";

export default {
  components: { totalProducts, addCoupons },
  data() {},
};
</script>
