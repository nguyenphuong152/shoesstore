<template>
  <v-app app pa-0>
    <v-row>
      <v-col cols="2">
        <NavBar />
      </v-col>
      <v-col>
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