<template>
  <v-row id="collection">
    <v-col v-for="n in 9" :key="n" class="d-flex child-flex" cols="4">
      <v-card class="mx-auto"
    outlined>
        <v-img
          :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
          :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
          aspect-ratio="1"
          class="grey lighten-2"
        >
          <template v-slot:placeholder>
            <v-row class="fill-height ma-0" align="center" justify="center">
              <v-progress-linear
                indeterminate
                color="yellow darken-2"
              ></v-progress-linear>
            </v-row>
          </template>
        </v-img>
        <v-card-title class="title-collection"> Pic{{ n }} </v-card-title>
        <v-card-subtitle class="title-collection">Price</v-card-subtitle>
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
