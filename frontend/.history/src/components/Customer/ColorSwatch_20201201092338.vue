<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <v-row>
        <v-sheet color="white" elevation="1" height="36" width="36"></v-sheet>
        <v-sheet color="white" elevation="1" height="36" width="36"></v-sheet>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      text: "",
      colors: [
        {
          value: "red",
        },
        {
          value: "green",
        },
        {
          value: "blue",
        },
        {
          value: "cyan",
        },
      ],
    };
  },
  methods: {
    alertColor: function() {
      var el = document.getElementsByClassName("color");
      alert(el);
    },
  },
};
</script>

<style></style>
