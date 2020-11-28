<template>
  <v-container class="admin">
      <a >Cart Totals</a>
      <v-row>
          <v-col>
              <a> Subtotal</a>
          </v-col>
          <v-col>
              <a >Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(1000000)</a>
          </v-col>
      </v-row>
  </v-container>
</template>

<script>
export default {

}
</script>

<style>

</style>