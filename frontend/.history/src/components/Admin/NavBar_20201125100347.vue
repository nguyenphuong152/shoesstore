<template>
  <v-container  class="admin-nav"> 
    <v-navigation-drawer permanent color="cyan darken-4">
      <v-list-item>
        <v-list-item-avatar>
          <v-img src="https://randomuser.me/api/portraits/men/78.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-content class="text-white">
          <v-list-item-title class="text-start">John Leider</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense class="admin-nav">
        <v-list-item v-for="item in items" :key="item.title" :to="item.path">
          <v-list-item-icon  class="admin-nav">
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content  class="admin-nav">
            <v-list-item-title class="text-start">{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { title: "Dash Board", icon: "mdi-view-dashboard", path:"/dashboard" },
        { title: "Banner", icon: "mdi-alpha-b-circle-outline", path:"/banner" },
        { title: "Categories", icon: "mdi-view-list", path:"/category" },
        { title: "Products", icon: "mdi-texture-box" , path:"/product" },
        { title: "Order List", icon: "mdi-layers", path:"/orderlist" },
        { title: "Manage Users", icon: "mdi-account-multiple-check-outline", path:"/manageuser"},
      ],
    };
  },
};
</script>

<style></style>
