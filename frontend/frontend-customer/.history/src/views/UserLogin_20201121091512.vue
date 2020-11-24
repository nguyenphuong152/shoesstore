<template>
  <div class="userlogin">
    <v-sheet color="grey lighten-3" height="180">
      <v-container py-8>
        <a class="slogan-3">My Account</a>
        <br />
        <a class="title-shoes">Home/My Account</a>
      </v-container>
    </v-sheet>
    <v-container nav>
      <v-row>
        <v-col cols="5">
          <a class="slogan-3 text-start">Login</a>
          <login />
        </v-col>
        <v-col>
           <a class="slogan-3">Register</a>
          <register />
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import login from "../components/Login";
import register from "../components/Register";
export default {
  components: {
    login,
    register,
  },
};
</script>
