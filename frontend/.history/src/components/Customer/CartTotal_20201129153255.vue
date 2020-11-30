<template>
  <v-container class="text-start admin">
    <a class="admin-nav font-weight-medium black--text">Cart Totals</a>
    <v-row>
      <v-col>
        <strong> Subtotal</strong>
      </v-col>
      <v-col>
        <a class="pl-6">{{
          Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
            1000000
          )
        }}</a>
      </v-col>
    </v-row>
    <v-row>
      <v-col>
        <strong> Shipping</strong>
      </v-col>
      <v-col>
        <v-expansion-panels flat dense>
          <v-expansion-panel class="admin text-start pa-0">
            <v-expansion-panel-header>
              Change Address
            </v-expansion-panel-header>
            <v-expansion-panel-content>
              <v-combobox
                class="admin text-start"
                v-model="select"
                :items="items"
                dense
                filled
                solo
                flat
              ></v-combobox>
              <v-text-field label="City" outlined></v-text-field>
              <v-text-field label="Postcode/ZIP" outlined></v-text-field>
              <v-btn depressed color="primary">
                Update
              </v-btn>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
        <div class="admin">
          <input type="radio" id="one" value="100000" v-model="price" />
          <label for="one">Fast express 2H</label>
          <br />
          <input type="radio" id="two" value="200000" v-model="price" />
          <label for="two">Standard shipping</label>
          <br />
          <span>
            {{
              Intl.NumberFormat("en-EN", {
                maximumSignificantDigits: 3,
              }).format(price)
            }}</span
          >
        </div>
      </v-col>
    </v-row>
    <v-divider></v-divider>
    <v-row>
      <v-col>
        <strong> Total</strong>
      </v-col>
      <v-col class="text-end">
        <a>{{
          Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
            1000000
          )
        }}</a>
      </v-col>
      <v-col class="text-end">
        <v-btn depressed color="primary" @click="goCheckout()">
          Check out
        </v-btn>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      price: "",
      select: ["Viet Nam"],
      items: ["US", "UK", "AUS", "CANADA"],
    };
  },
  methods: {
    goCheckout: function() {
      this.$router.push({ name: "Checkout" });
      alert("hi");
    },
  },
};
</script>

<style></style>
