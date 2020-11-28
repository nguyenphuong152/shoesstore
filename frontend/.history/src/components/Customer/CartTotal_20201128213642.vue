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
        <v-radio-group v-model="radioGroup" class=" ma-0 pl-5">
          <v-radio
            v-for="shipping in shippings"
            :key="shipping"
            :label="shipping.label"
            :value="shipping.value"
          ></v-radio>
        </v-radio-group>
        <a v-if="radioGroup=1" class="pl-4"> {{
          Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
            500000
          )
        }} </a>
        <a v-else-if="radioGroup=2" class="pl-4"> {{
          Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
            10000
          )
        }} </a>
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
        <v-btn depressed color="primary">
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
      radioGroup: 1,
      shippings: [
        {
          label: "Fast express 2H",
          value: 1,
        },
        {
          label: "Standard shipping",
          value: 2,
        },
      ],
      select: ["Viet Nam"],
      items: ["US", "UK", "AUS", "CANADA"],
    };
  },
};
</script>

<style></style>
