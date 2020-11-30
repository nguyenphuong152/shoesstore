<template>
  <div class="userlogin">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <span class="slogan-3">Checkout</span>
        <br />
        <span class="title-shoes">Home/Checkout</span>
      </v-container>
    </v-sheet>
    <v-container nav>
      <v-row>
        <v-col cols="4">
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
              <b class="slogan-3" text-start>Billing Details</b>
              <billingDetail />
            </v-container>
          </v-sheet>
        </v-col>
        <v-col>
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
              <b class="slogan-3">Your Order</b>
              <totalProducts />
              <br />
              <v-divider></v-divider>
              <strong class="admin">Payment Method</strong>
              <payment />
              <v-divider></v-divider>
              <v-row class="admin">
                <v-col>
                  <strong>
                    Subtotal
                  </strong>
                </v-col>
                <v-col>
                  <span class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(1000000)
                  }}</span>
                </v-col>
              </v-row>
              <v-row class="admin">
                <v-col>
                  <strong>Shipping</strong>
                </v-col>
                <v-col>
                  <span class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(10000)
                  }}</span>
                </v-col>
              </v-row>
              <v-divider></v-divider>
              <v-row class="admin">
                <v-col>
                  <strong>Total</strong>
                </v-col>
                <v-col>
                  <span class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(10000000)
                  }}</span>
                </v-col>
                <v-col cols="3">
                  <v-btn depressed color="primary" @click="goCheckout()">
                    Place Order
                  </v-btn>
                </v-col>
              </v-row>
            </v-container>
          </v-sheet>
          <br />
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import billingDetail from "../../components/Customer/BillingDetail";
import payment from "../../components/Customer/PaymentMethods";
import totalProducts from "../../components/Customer/TotalProducts.vue";

export default {
  components: {
    billingDetail,
    payment,
    totalProducts,
  },
  data() {},
};
</script>
