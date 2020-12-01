<template>
  <div class="userlogin">
    <v-sheet color="grey lighten-3" height="150">
      <v-container class="py-8 ">
        <span class="title-normal">My Account</span>
        <br />
        <span class="title-shoes">Home/My Account</span>
      </v-container>
    </v-sheet>
    <v-container nav>
      <v-row>
        <v-col  >
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
               <b class="title"  text-start>Login</b>
               <login />
            </v-container>
          </v-sheet>
        </v-col>
        <v-col>
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
                 <b class="title" >Register</b>
          <register />
            </v-container>
          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import login from "../../components/Customer/Login";
import register from "../../components/Customer/Register";
export default {
  components: {
    login,
    register,
  },
};
</script>
