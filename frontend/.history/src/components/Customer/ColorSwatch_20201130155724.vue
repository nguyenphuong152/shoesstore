<template>
  <v-row class="d-flex align-baseline text-start">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <v-row class="d-flex child-flex btn-group-justified">
        <v-btn-toggle v-model="text" tile group class="admin" background-color="pink">
          <v-btn
            color="pink"
            v-for="(color, i) in colors"
            :key="i"
            :value="color.value"
            @click="changeColor(color.value)" 
          >
          </v-btn>
        </v-btn-toggle>
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
    changeColor: function(color) {
      alert(color);
    },
  },
};
</script>

<style></style>
