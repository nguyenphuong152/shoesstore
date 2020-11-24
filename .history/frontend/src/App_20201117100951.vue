<template>
  <div id="app">
    <div class="toolbar">
      <v-card color="grey lighten-4" flat height="200px" tile>
        <v-toolbar extended extension-height="50">
          <v-toolbar-title>MEWGO</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items>
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
      </v-card>
      <v-card color="grey lighten-4" tile>
        <v-toolbar dense>
          <v-button-items>
            <router-link to="/">Home</router-link> |
            <router-link to="/about">About</router-link>
          </v-button-items>
        </v-toolbar>
      </v-card>
    </div>
    <router-view />
  </div>
</template>
