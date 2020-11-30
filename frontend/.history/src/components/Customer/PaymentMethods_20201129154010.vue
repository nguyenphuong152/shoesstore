<template>
  <v-container>
    <input type="radio" id="one" value="1" v-model="payment" />
    <label for="one" pl-2>Direct bank transfer</label>
    <br />
    <input type="radio" id="two" value="2" v-model="payment" />
    <label for="two">Cash on delivery</label>
    <br />
    <input type="radio" id="three" value="3" v-model="payment" />
    <label for="three">E-wallet</label>
    <br />
  </v-container>
</template>

<script>
export default {
    data(){
        return {
            payment:''
        }
    }
};
</script>

<style></style>
