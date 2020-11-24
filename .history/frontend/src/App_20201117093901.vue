<template>
  <div id="app">
    <div class="toolbar">
      <v-card color="grey lighten-4" flat height="200px" tile>
        <v-toolbar extended extension-height="100">
          <v-toolbar-title>Title</v-toolbar-title>
          <v-spacer></v-spacer>
        </v-toolbar>
      </v-card>
    </div>
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <router-view />
  </div>
</template>
