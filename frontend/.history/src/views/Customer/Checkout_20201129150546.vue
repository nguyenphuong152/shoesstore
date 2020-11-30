<template>
  <div class="userlogin">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Checkout</a>
        <br />
        <a class="title-shoes">Home/Checkout</a>
      </v-container>
    </v-sheet>
    <v-container nav>
      <v-sheet color="grey lighten-3">
        <v-container pa-8 text-start>
          <b class="slogan-3" text-start>Billing Details</b>
          <billingDetail />
        </v-container>
      </v-sheet>
    </v-container>
  </div>
</template>

<script>
import billingDetail from "../../components/Customer/BillingDetail";
import register from "../../components/Customer/Register";
export default {
  components: {
    billingDetail,
    register,
  },
};
</script>
