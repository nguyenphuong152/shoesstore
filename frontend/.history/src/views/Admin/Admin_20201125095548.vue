<template>
  <v-app>
    <v-row >
      <v-col cols="2" class="pa-0 admin-nav">
        <NavBar />
      </v-col>
      <v-col class="pa-0 admin">
        <ToolBar/>
        <v-row>
          <v-container>
               <router-view></router-view>
          </v-container>
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