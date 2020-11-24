<template>
  <v-carousel cycle height="400" hide-delimiter-background>
    <v-carousel-item v-for="(item, i) in items" :key="i" :src="item.src">
      <v-row class="fill-height title" align="center" justify="center">
        <div class="display-3">{{ item.title }}</div>
      </v-row>
    </v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: require("../assets/logo.png"),
          title: "Sau tham trong ",
        },
        {
          src: require("../assets/logo.png"),
          title: "trai tim em ",
        },
        {
          src: require("../assets/logo.png"),
          title: "1 tinh iu",
        },
        {
          src: require("../assets/logo.png"),
          title: "siu khung long",
        },
      ],
    };
  },
};
</script>
