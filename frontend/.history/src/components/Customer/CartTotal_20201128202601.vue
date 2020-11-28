<template>
  <v-container class="admin text-start">
    <a class="admin-nav font-weight-medium black--text">Cart Totals</a>
    <v-row>
      <v-col>
        <a> Subtotal</a>
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
        <a> Shipping</a>
      </v-col>
      <v-col>
        <v-container
    class="px-0"
    fluid
  >
    <v-radio-group v-model="radioGroup" class="d-flex align-baseline">
      <v-radio
        v-for="n in 3"
        :key="n"
        :label="`Radio ${n}`"
        :value="n"
      ></v-radio>
    </v-radio-group>
  </v-container>
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
