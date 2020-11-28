<template>
  <v-data-table :headers="headers" :items="desserts" class="elevation-1">
    <template slot:item="{ item }">
      <img
        :src="'../../assets/' + item.name"
        style="width: 50px; height: 50px"
      />
    </template>
  </v-data-table>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      headers: [
        {
          text: "Images",
          align: "left",
          sortable: false,
          value: "name",
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Iron (%)", value: "iron" },
        { text: "Actions", value: "action", sortable: false },
      ],
      desserts: [
        {
          value: false,
          name: "brand-1.png",
          calories: 159,
          fat: 6.0,
          carbs: 24,
          protein: 4.0,
          iron: "1%",
        },
      ],
    };
  },
};
</script>

<style></style>
