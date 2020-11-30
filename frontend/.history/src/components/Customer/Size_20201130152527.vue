<template>
  <v-btn-toggle v-model="text" tile color="cyan accent-5" group class="admin">
    <v-btn v-for="(size, i) in sizes" :key="i" :value="size.value">
      {{ size.value }}
    </v-btn>
  </v-btn-toggle>
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
      alert(text);
  }
};
</script>

<style></style>
