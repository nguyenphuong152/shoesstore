<template>
<v-row class="d-flex align-baseline text-start">
    <v-col>
<span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
 <v-btn-toggle v-model="text" tile background-color="red" group class="admin">
    <v-btn v-for="(color, i) in colors" :key="i" :value="color.value" @click="changeColor(color.value)">hi
    </v-btn>
  </v-btn-toggle>
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
  methods : {
     changeColor: function(color)
     {
         alert(color);
     }
  }
};
</script>

<style></style>
