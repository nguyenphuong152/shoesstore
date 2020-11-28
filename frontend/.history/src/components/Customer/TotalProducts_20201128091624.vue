<template>
  <div id="app">
    <v-app id="inspire">
      <v-data-table :headers="headers" :items="products" class="elevation-1">
        <template v-slot:item.path>
          <v-img
            lazy-src="require('item.path')"
            max-height="100"
            max-width="100"
            src="require('item.path')"
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
        { text: "Preview", value: "path" },
        { text: "Product", value: "name" },
        { text: "Price", value: "price" },
        { text: "Quantity", value: "quantity" },
        { text: "Total", value: "total" },
      ],
      products: [
        {
          id: 1,
          path: require('../../assets/brand-1.jpg'),
          name: "The first shoes",
          price: Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(1000000),
          quantity: 1,
          total: Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(100000),
        },
        {
          id: 2,
          path: require('../../assets/brand-2.jpg'),
          name: "The first shoes",
          price:Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(100000),
          quantity: 1,
          total: Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(100000)
        },
        {
         id: 3,
          path: require('../../assets/brand-2.jpg'),
          name: "The first shoes",
          price: Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(1000000),
          quantity: 1,
          total:Intl.NumberFormat('en-EN', { maximumSignificantDigits: 3 }).format(100000),
        },
      ],
    };
  },
};
</script>

<style></style>
