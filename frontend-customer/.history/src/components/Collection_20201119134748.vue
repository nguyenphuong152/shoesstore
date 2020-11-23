<template>
  <v-row>
    <v-col v-for="n in 2" :key="n" class="d-flex child-flex" cols="6">
      <v-card>
        <v-img
          :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
          :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
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
        </v-img>
        <v-card-title class="title-collection justify-center">
      {{titles[n-1]}}
    </v-card-title>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
      data(){
          return {
              titles:[
                  "Shop Men's Collection",
                  "Shop Women's Collection",
              ],
          }
      }
};
</script>

<style></style>
