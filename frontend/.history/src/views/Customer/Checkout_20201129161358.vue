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
              <v-row>
                <v-col>
                  <strong>
Subtotal
                  </strong>
                  
                </v-col>
                <v-col>
                  <a class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(1000000)
                  }}</a>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                 <strong>Shipping</strong>
                </v-col>
                <v-col>
                  <a class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(10000)
                  }}</a>
                </v-col>
              </v-row>
              <v-row>
                <v-col>
                  <strong>Total</strong>
                </v-col>
                <v-col>
                  <a class="pl-6">{{
                    Intl.NumberFormat("en-EN", {
                      maximumSignificantDigits: 3,
                    }).format(10000000)
                  }}</a>
                </v-col>
              </v-row>
            </v-container>
          </v-sheet>
          <br />
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
              <b class="slogan-3">Payment</b>
              <payment />
            </v-container>
          </v-sheet>
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
