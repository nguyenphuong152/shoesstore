<template>
  <div id="app">
    <v-app id="inspire">
      <v-data-table :headers="headers" :items="desserts" class="elevation-1">
        <template v-slot:item.calories>
          <v-img
            lazy-src="https://picsum.photos/id/11/10/6"
            max-height="100"
            max-width="100"
            src="https://picsum.photos/id/11/500/300"
          ></v-img>
        </template>
      </v-data-table>
    </v-app>
  </div>
</template>

<script>
export default {
  data() {
    return {
      headers: [
        {
          text: "",
          align: "start",
          sortable: false,
          value: "id",
        },
        { text: "", value: "path" },
        { text: "Product", value: "name" },
        { text: "Price", value: "price" },
        { text: "Quantity", value: "quantity" },
        { text: "Total", value: "total" },
      ],
      desserts: [
        {
          id: 1,
          path: require('../../assets/brand-1.jpg'),
          name: "The first shoes",
          price: Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(1000000),
          quantity: 1,
          total: Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(100000),
        },
        {
          id: 2,
          path: require('../../assets/brand-2.jpg'),
          name: "The first shoes",
          price:Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(100000),
          quantity: 1,
          total: Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(100000)
        },
        {
         id: 3,
          path: require('../../assets/brand-2.jpg'),
          name: "The first shoes",
          price: Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(1000000),
          quantity: 1,
          total:Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(100000),
        },
      ],
    };
  },
};
</script>

<style></style>
