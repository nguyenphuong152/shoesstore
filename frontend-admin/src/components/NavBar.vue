<template>
  <nav >
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
   
   <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary 
      dark
    >
      <v-list-item>
        <v-list-item-avatar>
          <v-img src="https://randomuser.me/api/portraits/men/78.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>John Leider</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>
        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

  </nav>
</template>

<script>
export default {
  data() {
    return {
      drawer: null,
        items: [
          { title: 'Dash Board', icon: 'mdi-view-dashboard' },
          { title: 'Store Setting', icon: 'mdi-store' },
          { title: 'Categories', icon: 'mdi-view-list' },
          { title: 'Products', icon: 'mdi-local-activity' },
          { title: 'Order List', icon: 'mdi-layers' },
          { title: 'Manage Users', icon: 'mdi-people' },
          { title: 'Admin Setting', icon: 'mdi-tune' },
          
        ],
    };
  },
};
</script>

<style></style>
