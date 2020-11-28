<template>
  <div class="app text-end">
      <a class="admin-nav font-weight-medium black--text">Your Coupons</a>
      <v-row class="d-flex align-baseline">
           <v-col
          cols="8"
        >
          <v-text-field
          class="admin"
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