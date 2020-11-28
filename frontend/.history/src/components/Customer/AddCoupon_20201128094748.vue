<template>
  <div class="app">
      <a class="admin">Your Coupons</a>
      <v-row class="d-flex align-stretch">
           <v-col
          cols="8"
        >
          <v-text-field
            label="Coupon"
            outlined
          ></v-text-field>
        </v-col>
         <v-col
        >
           <v-btn
      depressed
      color="primary"
    >
      Add
    </v-btn>
        </v-col>
      </v-row>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>