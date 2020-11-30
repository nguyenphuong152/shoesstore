<template>
  <v-container>
    <input type="radio" id="one" value="1" v-model="payment" />
    <label for="one">Direct bank transfer</label>
    <br />
    <input type="radio" id="two" value="2" v-model="payment" />
    <label for="two">Cash on delivery</label>
    <br />
    <input type="radio" id="three" value="2" v-model="payment" />
    <label for="two">E-wallet</label>
    <br />
  </v-container>
</template>

<script>
export default {};
</script>

<style></style>
