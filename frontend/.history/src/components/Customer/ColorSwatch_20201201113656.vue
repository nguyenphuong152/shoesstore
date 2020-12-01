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
          @click="
            checkFalse(colors);
            checkTrue(col);
          "
        >
          <transition name="fade">
            <v-icon v-show="col.show">mdi-check</v-icon>
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
    checkFalse: function(colors) {
      //  console.log(JSON.parse(JSON.stringify(colors)));
      // let colorArr = JSON.parse(JSON.stringify(colors));
      // console.log(colorArr);
      for (var i = 0; i < colors.length; i++) {
        colors[i].show = false;
      }
    },
    checkTrue: function(col) {
      col.show = true;
    },
  },
};
</script>

<style></style>
