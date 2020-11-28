<template>
  <v-container class="admin">
    <a>Cart Totals</a>
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
        <v-container fluid>
          <p>{{ radios || "null" }}</p>
          <v-radio-group v-model="radios" mandatory>
            <v-radio label="Radio 1" value="radio-1"></v-radio>
            <v-radio label="Radio 2" value="radio-2"></v-radio>
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
      radios: null,
    };
  },
};
</script>

<style></style>
