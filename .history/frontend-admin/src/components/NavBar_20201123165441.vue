<template>
  <nav>
    <v-navigation-drawer
    clipped
      absolute
      temporary
      disable-resize-watcher
      color="cyan lighten-2"
      v-model="drawer"
    >
      <p>Test</p>
    </v-navigation-drawer>
    <v-toolbar flat app>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>
        <span class="font-weight-light">ADMIN </span>
        <span>DASHBOARD</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn text color="black">
        <span>Sign Out</span>
        <v-icon right>mdi-exit-to-app</v-icon>
      </v-btn>
    </v-toolbar>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
    };
  },
};
</script>

<style></style>
