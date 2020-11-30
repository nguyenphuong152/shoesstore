<template>
  <v-container class="text-start pa-0">
    <v-container pa-0>
      <span class="product-detail--title">This is product's name</span>
      <br />
      <span class="product-detail--price">
        {{
          Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
            1000000
          )
        }}</span
      >
    </v-container>
  </v-container>
</template>

<script>


export default {
  
};
</script>

<style></style>
