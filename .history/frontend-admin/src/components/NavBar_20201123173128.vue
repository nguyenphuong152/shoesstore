<template>
  <v-app >
    <v-toolbar flat app>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

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
   
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
        selectedItem: 0,
      items: [
        { text: 'My Files', icon: 'mdi-folder' },
        { text: 'Shared with me', icon: 'mdi-account-multiple' },
        { text: 'Starred', icon: 'mdi-star' },
        { text: 'Recent', icon: 'mdi-history' },
        { text: 'Offline', icon: 'mdi-check-circle' },
        { text: 'Uploads', icon: 'mdi-upload' },
        { text: 'Backups', icon: 'mdi-cloud-upload' },
      ],
    };
  },
};
</script>

<style></style>
