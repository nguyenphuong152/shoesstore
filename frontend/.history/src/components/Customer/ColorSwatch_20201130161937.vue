<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <div class="colors" v-bind="alertColor">
        <div
        class="color"
          v-for="(color, i) in colors"
          :key="i"
          v-bind:style="{ background-color:color.value }"
          data-hex="color.value"
        ></div>
      </div>
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
