<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
      <v-row class="d-flex justify-space-around">
        <v-sheet
          v-for="(col,i) in colors"
          :key="i"
          v-bind="{color:col.value,elevation:ele}"
          height="36"
          width="36"
          @click="alertColor(ele)"
          v-model="ele"
        ></v-sheet>
      </v-row>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      text: "",
      ele:"0",
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
      el=20;
      return el;
    },
  },
};
</script>

<style></style>
