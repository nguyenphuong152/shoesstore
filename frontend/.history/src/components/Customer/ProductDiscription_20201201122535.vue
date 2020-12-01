<template>
  <v-container class="text-start">
    <strong class="product-detail--price font-weight-medium"
      >View Product Details</strong
    >
    <br />
    <span class="admin"> {{ content }} </span>
    <br>
    <br>
    <span class="admin">{{content1}}</span>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      content:
        "Featuring the same ripple design of the OG that was inspired by Japanese bullet trains, the Nike Air Max 97 lets you push your style full-speed ahead. Taking the revolutionary full-length Nike Air unit that shook up the running world and adding fresh colours, it lets you ride in first-class comfort.",
      content1: "The fabric and synthetic upper keep the fluid look of the OG while adding comfort and durability.Originally designed for performance running,the full-length Max Air unit adds soft, lasting comfort.The foam midsole feels springy and soft.The rubber outsole adds traction and durability."}
  },
};
</script>

<style></style>
