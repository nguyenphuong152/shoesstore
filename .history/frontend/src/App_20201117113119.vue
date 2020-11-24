<template>
  <div id="app">
    <div>
      <v-card flat height="200px" tile>
        <v-toolbar extended extension-height="80">
          <v-toolbar-title id="logo">MewGo</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items id="searchbar">
            <v-text-field
              v-model="search"
              append-icon="mdi-magnify"
              label="Search"
              outlined
              single-line
              hide-details
            ></v-text-field>
          </v-toolbar-items>
        </v-toolbar>
        <v-card flat tile id="nav">
          <v-button-items>
            <router-link to="/">Home</router-link>
            <router-link to="/men">Men</router-link>
            <router-link to="/women">Women</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/contact">Contact</router-link>
          </v-button-items>
        </v-card>
      </v-card>
    </div>
    <v-content id="banner">
      <v-carousel
        cycle
        height="400"
        hide-delimiter-background
        show-arrows-on-hover
      >
        <v-carousel-item v-for="(slide, i) in slides" :key="i">
          <v-sheet :color="colors[i]" height="100%">
            <v-row class="fill-height" align="center" justify="center">
              <div class="display-3">{{ slide }} Slide</div>
            </v-row>
          </v-sheet>
        </v-carousel-item>
      </v-carousel>
    </v-content>
    <router-view />
  </div>
</template>

<script>
  export default {
    data () {
      return {
        colors: [
          'indigo',
          'warning',
          'pink darken-2',
          'red lighten-1',
          'deep-purple accent-4',
        ],
        slides: [
          'First',
          'Second',
          'Third',
          'Fourth',
          'Fifth',
        ],
      }
    },
  }
</script>


export default {
 
}
</script>