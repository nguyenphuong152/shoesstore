<template>
  <v-row class= "d-flex justify-space-around">
    <v-col
      v-for="item in items"
      :key="item.id"
      class="d-flex child-flex"
      cols="2"
    >
        <v-img :src="item.src" class="grey lighten-2">
          <template v-slot:placeholder>
            <v-row class="fill-height ma-0" align="center" justify="center">
              <v-progress-circular
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </v-row>
          </template>
        </v-img>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          id: 1,
          src: require("../../assets/brand-1.jpg"),
        },
        {
          id: 2,
          src: require("../../assets/brand-2.jpg"),
        },
        {
          id: 3,
          src: require("../../assets/brand-3.jpg"),
        },
        {
          id: 4,
          src: require("../../assets/brand-4.jpg"),
        },
        {
          id: 5,
          src: require("../../assets/brand-5.jpg"),
        },
      ],
    };
  },
};
</script>

<style></style>
