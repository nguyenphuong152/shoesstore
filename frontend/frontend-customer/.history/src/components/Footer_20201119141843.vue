<template>
  <v-footer padless>
   <v-container class="grey lighten-5">
    <v-row no-gutters>
      <v-col order="last">
        <v-card
          class="pa-2"
          outlined
          tile
        >
          First, but last
        </v-card>
      </v-col>
      <v-col>
        <v-card
          class="pa-2"
          outlined
          tile
        >
          Second, but unordered
        </v-card>
      </v-col>
      <v-col order="first">
        <v-card
          class="pa-2"
          outlined
          tile
        >
          Third, but first
        </v-card>
      </v-col>
    </v-row>
  </v-container>

      <v-divider></v-divider>

      <v-card-text class="white--text footer-text">
        <strong>Made with love ♥</strong>
      </v-card-text>
    </v-card>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    icons: ["mdi-facebook", "mdi-twitter", "mdi-linkedin", "mdi-instagram"],
  }),
};
</script>

<style></style>
