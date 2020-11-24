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
        <v-col  >
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
               <a class="slogan-3" text-start>Login</a>
               <login />
            </v-container>
          </v-sheet>
        </v-col>
        <v-col>
          <v-sheet color="grey lighten-3">
            <v-container pa-8 text-start>
                 <a class="slogan-3">Register</a>
          <register />
            </v-container>
          </v-sheet>
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
