<template>
<nav>
     <v-toolbar flat>
    <v-toolbar-side-icon @click="drawer=!drawer"></v-toolbar-side-icon>

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

  <v-navigation-drawer app color="cyan-lighten-2" v-model="drawer">
        <p>Test</p>
  </v-navigation-drawer>
</nav>
</template>

<script>
export default {
    data() {
         return {
        drawer: false
    }
    }
};
</script>

<style></style>
