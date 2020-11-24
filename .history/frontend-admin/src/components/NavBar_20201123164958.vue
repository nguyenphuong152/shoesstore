<template>
  <nav>
    <v-toolbar flat app>
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

    <v-navigation-drawer
      absolute
      permanent
      disable-resize-watcher
      color="cyan lighten-2"
      v-model="drawer"
    >
      <p>Test</p>
    </v-navigation-drawer>
  </nav>
</template>

<script>
export default {
  data() {
    return {
     
    };
  },
};
</script>

<style></style>
