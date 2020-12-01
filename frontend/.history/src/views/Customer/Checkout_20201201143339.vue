<template>
  <div class="userlogin">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <span class="title-normal">Checkout</span>
        <br />
        <span class="title-shoes">Home/Checkout</span>
      </v-container>
    </v-sheet>
    <v-container nav>
      <v-row>
        <v-col cols="4">
          <v-sheet color="teal lighten-4">
            <v-container pa-8 text-start>
              <span class="admin">Returning customer?</span>

              <v-expansion-panels flat dense>
                <v-expansion-panel class="admin text-start pa-0">
                  <v-expansion-panel-header>
                    Login here!
                  </v-expansion-panel-header>
                  <v-expansion-panel-content>
                    <v-text-field label="Username" outlined></v-text-field>
                    <v-text-field label="Password" outlined></v-text-field>
                    <v-btn depressed color="primary">
                      Login
                    </v-btn>
                  </v-expansion-panel-content>
                </v-expansion-panel>
              </v-expansion-panels>
            </v-container>
          </v-sheet>
          <br />
          <v-sheet color="teal lighten-4">
            <v-container pa-8 text-start>
              <strong class="admin" text-start>Billing Details</strong>
              <billingDetail />
            </v-container>
          </v-sheet>
        </v-col>
        <v-col>
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
              <strong class="admin">Your Order</strong>
              <br>
              <br>
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
                <v-col cols="6">
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
  data() {
    return {
      select: ["Viet Nam"],
      items: ["US", "UK", "AUS", "CANADA"],
    };
  },
};
</script>
