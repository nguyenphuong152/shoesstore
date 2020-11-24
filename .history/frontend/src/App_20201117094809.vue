<template>
  <div id="app">
    <div class="toolbar">
      <v-card color="grey lighten-4" flat height="100px" tile>
        <v-toolbar extended extension-height="100">
          <v-toolbar-title>MEWGO</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items>
              <router-link to="/">Home</router-link> |
              <router-link to="/about">About</router-link>
          </v-toolbar-items>
        </v-toolbar>
      </v-card>
    </div>
    <router-view />
  </div>
</template>
