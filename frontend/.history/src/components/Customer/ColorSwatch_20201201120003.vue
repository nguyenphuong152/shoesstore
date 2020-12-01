<template>
  <v-row class="d-flex text-start justify-center pt-10">
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
          shaped
          @click="
            checkFalse();
            checkTrue(col);
          "
        >
          <v-icon v-show="col.show">mdi-check</v-icon>
        </v-sheet>
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
    checkFalse: function() {
      for (var i = 0; i < this.colors.length; i++) {
        this.colors[i].show = false;
      }
    },
    checkTrue: function(col) {
      col.show = true;
    },
  },
};
</script>

<style></style>
