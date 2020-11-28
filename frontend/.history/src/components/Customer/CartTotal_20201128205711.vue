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
        <v-radio-group v-model="radioGroup" class=" ma-0 pl-5">
          <v-radio
            v-for="shipping in shippings"
            :key="shipping"
            :label="shipping.label"
            :value="shipping.value"
          ></v-radio>
        </v-radio-group>

        <v-expansion-panels flat dense>
          <v-expansion-panel class="admin text-start pa-0">
            <v-expansion-panel-header>
              Change Address
            </v-expansion-panel-header>
            <v-expansion-panel-content>
              <v-combobox
                v-model="select"
                :items="items"
                label="Combobox"
                outlined
                dense
              ></v-combobox>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
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
          label: "Flat rate",
          value: 1,
        },
        {
          label: "Free Shipping",
          value: 2,
        },
      ],
      select: ["Vuetify", "Programming"],
      items: ["Programming", "Design", "Vue", "Vuetify"],
    };
  },
};
</script>

<style></style>
