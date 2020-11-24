<template>
  <v-row>
    <v-col v-for="n in 12" :key="n" class="d-flex child-flex" cols="4">
      <v-card class="mx-auto" max-width="300" max-height="00" outlined>
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
        <v-row>
          <v-col>
            <v-card-title class="title-shoes justify-left">
              Pic{{ n }}
            </v-card-title>
            <v-row no-gutters>
              <v-col>
                <v-card-subtitle class="text-start">Price</v-card-subtitle>
              </v-col>
              <v-col>
                <v-card-actions>
                  <v-btn
                    text
                    color="teal accent-4 text-right"
                    @click="reveal = true"
                  >
                    Learn More
                  </v-btn>
                </v-card-actions>
              </v-col>
            </v-row>
          </v-col>
        </v-row>

        <v-expand-transition>
          <v-card
            v-if="reveal"
            class="transition-fast-in-fast-out v-card--reveal"
            style="height: 25%;"
          >
            <v-card-text class="pb-0">
              <p class="display-1 text--primary">
                Origin
              </p>
              <p>
                late 16th century (as a noun denoting a place where alms were
                distributed): from medieval Latin eleemosynarius, from late
                Latin eleemosyna ‘alms’, from Greek eleēmosunē ‘compassion’
              </p>
            </v-card-text>
            <v-card-actions class="pt-0">
              <v-btn text color="teal accent-4" @click="reveal = false">
                Close
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-expand-transition>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data: () => ({
    reveal: false,
  }),
};
</script>

<style></style>
