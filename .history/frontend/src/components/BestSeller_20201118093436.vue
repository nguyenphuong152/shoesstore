<template>
  <v-row id="collection">
    <v-col v-for="n in 9" :key="n" class="d-flex child-flex" cols="4">
      <v-card class="mx-auto"
    max-width="344">
        <v-img
          :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
          :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
          aspect-ratio="1"
          class="grey lighten-2"
        >
          <template v-slot:placeholder>
            <v-row class="fill-height ma-0" align="center" justify="center">
              <v-progress-circular
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </v-row>
          </template>
          <v-card-title class="title-collection"> Pic{{ n }} </v-card-title>
          <v-card-subtitle>Price</v-card-subtitle>
        </v-img>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {},
};
</script>

<style></style>
