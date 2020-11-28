<template>
  <v-data-table :headers="headers" :items="desserts" :search="search" light>
    <template slot="items" slot-scope="props">
      <td><v-img :src="props.item.name" style="width: 50px; height: 50px" /></td>
      <td class="text-xs-right">{{ props.item.calories }}</td>
      <td class="text-xs-right">{{ props.item.fat }}</td>
      <td class="text-xs-right">{{ props.item.carbs }}</td>
      <td class="text-xs-right">{{ props.item.protein }}</td>
      <td class="text-xs-right">{{ props.item.iron }}</td>
    </template>
    <v-alert
      slot="no-results"
      :value="true"
      dir="rtl"
      color="error"
      icon="warning"
    >
    </v-alert>
  </v-data-table>
</template>

<script>
export default {
  data() {
    return {
      //TEXT
      //TABLE DATA
      search: "",
      headers: [
        {
          text: 'hlo',
          align: "center",
          sortable: false,
          value: "image",
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Iron (%)", value: "iron" },
      ],
      desserts: [
        {
          value: false,
          name: "../../assets/brand-1.jpg",
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
