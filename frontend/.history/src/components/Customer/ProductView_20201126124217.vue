<template>
  <v-row>
    <v-col v-for="n in 12" :key="n" class="d-flex child-flex" cols="4">
      <v-card class="mx-autoS" max-width="300" max-height="400" outlined >
        <v-img
          :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
          :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
          aspect-ratio="1"
          class="grey lighten-2"
          height="200"
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
        <v-card-title class="title-shoes text-start"> Pic{{ n }} </v-card-title>
        <v-card-subtitle class="text-start float-left">Price</v-card-subtitle>
        <v-card-actions class = "float-right">
      <v-btn
      class="title-shoes"
        color="#88c8bc"
        text
        @click="goDetail(n)"
      >
        DETAIL
      </v-btn>

    
    </v-card-actions>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  mounted()
  {
    goDetail: function(id) {
     this.$router.push({name: 'ProductDetail', params: {id}})
},},
  data: () => ({
   
  }),
};
</script>

<style></style>
