<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <v-row class="d-flex justify-space-around">
        <v-btn
          v-for="(col, i) in colors"
          :key="i"
          v-bind="{ color: col.value }"
          height="36"
          width="36"
          @click="show = true"
        >
          <transition name="fade">
            <v-icon v-show="check(show)">mdi-check</v-icon>
          </transition></v-btn
        >
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
          show: false,
        },
        {
          value: "green",
          show: false,
        },
        {
          value: "blue",
          show: false,
        },
        {
          value: "cyan",
          show: false,
        },
      ],
    };
  },
  methods: {
    alertColor: function(el) {
      alert(el);
    },
    // check: function(e) {
    //   this.colors.forEach(color)
    //   {
    //     if (color.show)
         
    //   }
    // }
  },
};
</script>

<style></style>
