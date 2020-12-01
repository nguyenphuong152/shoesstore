<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <v-row class="d-flex justify-space-around">
        <v-sheet
          v-for="(col, i) in colors"
          :key="i"
          v-bind="{ color: col.value }"
          height="36"
          width="36"
          @click="show=!show"
        ></v-sheet>
        <transition name="fade">
    <p v-if="show">hello</p>
  </transition>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      text: "",
      show:true,
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
    alertColor: function(el) {
      alert(el);
    },
  },
};
</script>

<style></style>
