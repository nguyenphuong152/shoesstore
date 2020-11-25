<template>
  <v-app class="admin-app">
    <v-row>
      <v-col cols="2" class="pa-0">
        <NavBar />
      </v-col>
      <v-col class="pa-0">
        <ToolBar/>
        <v-row>
              <router-view></router-view>
        </v-row>
      </v-col>
    </v-row>
  </v-app>
</template>

<script>
import NavBar from "../../components/Admin/NavBar";
import ToolBar from '../../components/Admin/ToolBar';

export default {
  name: "App",
  components: { NavBar, ToolBar },
  data() {

  }
    
};
</script>