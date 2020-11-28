<template>
  <div class="cart app">
    <v-sheet color="grey lighten-3" height="120">
      <v-container py-8>
        <a class="slogan-3">Cart</a>
      </v-container>
    </v-sheet>
    <div>
      <v-container >
        <totalProducts />
      </v-container>
    </div>
  </div>
</template>

<script>
import totalProducts from "../../components/Customer/TotalProducts";

export default {
  components: { totalProducts },
  data() {},
};
</script>
