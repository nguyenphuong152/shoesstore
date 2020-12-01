<template>
  <v-container class="text-start">
    <strong class="product-detail--price font-weight-medium"
      >View Product Details</strong
    >
    <br />
    <span class="admin"> {{ content }} </span>
    <br/>
    <span class="admin "> Available colors: </span>
    <ul class="admin">
      <li v-for="(item,index) in colors" :key="index">
       {{ item.name }}
      </li>
    </ul>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      content:
        "Featuring the same ripple design of the OG that was inspired by Japanese bullet trains, the Nike Air Max 97 lets you push your style full-speed ahead. Taking the revolutionary full-length Nike Air unit that shook up the running world and adding fresh colours, it lets you ride in first-class comfort.",
      colors: [
        { name: "Summit White" },
        { name: "Light Orewood Brown" },
        { name: "Light Arctic Pink" },
        { name: "Metallic Summit White" },
      ],
    };
  },
};
</script>

<style></style>
