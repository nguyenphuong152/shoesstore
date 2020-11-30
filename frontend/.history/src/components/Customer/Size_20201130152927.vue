<template>
<v-row class="d-flex align-baseline">
    <v-col>
<span class="admin">Please choose your size:</span>
    </v-col>
    <v-col>
 <v-btn-toggle v-model="text" tile color="cyan accent-5" group class="admin">
    <v-btn v-for="(size, i) in sizes" :key="i" :value="size.value" @click="changeSize(size.value)">
      {{ size.value }}
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
      sizes: [
        {
          value: "36",
        },
        {
          value: "37",
        },
        {
          value: "38",
        },
        {
          value: "39",
        },
      ],
    };
  },
  methods : {
     changeSize: function(size)
     {
         alert(size);
     }
  }
};
</script>

<style></style>
