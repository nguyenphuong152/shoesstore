<template>
  <v-container class="text-start admin">
    <a class="admin-nav font-weight-medium black--text">Cart Totals</a>
    <v-row>
      <v-col>
        <strong> Subtotal</strong>
      </v-col>
      <v-col>
        <a>{{
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
        <v-radio-group v-model="radioGroup" class=" ma-0">
          <v-radio
            v-for="n in 3"
            :key="n"
            :label="`Radio ${n}`"
            :value="n"
          ></v-radio>
        </v-radio-group>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      radioGroup: 1,
    };
  },
};
</script>

<style></style>
