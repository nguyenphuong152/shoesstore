<template>
  <v-container class="app">
    <v-list three-line>
      <template v-for="(item, index) in items">
        <v-subheader
          class="admin-nav black--text"
          v-if="item.header"
          :key="item.header"
          v-text="item.header"
        ></v-subheader>

        <v-divider v-else-if="item.divider" :key="index"></v-divider>

        <v-list-item v-else :key="item.title">
          <v-img :src="item.avatar" max-height="150" max-width="150"></v-img>
          <v-list-item-content class="text-start ml-4">
            <v-list-item-title
              v-html="item.title"
              class="admin"
            ></v-list-item-title>
            <v-list-item-subtitle
              class="admin"
              v-html="item.subtitle"
            ></v-list-item-subtitle>
            <v-list-item-subtitle
              class="admin"
              v-html="item.subtitle"
            ></v-list-item-subtitle>
            <v-row class="pl-4 d-flex align-center">
              <v-col class="pa-0 admin " cols="4">
                <a>Quantity</a>
              </v-col>
              <v-col class="pa-0 admin" cols="3">
                <v-text-field single-line></v-text-field>
                <v-btn class="ma-2" outlined color="indigo">
              Outlined Button
            </v-btn>
              </v-col>
              <v-col class="text-end admin">
                <a> Price</a>
              </v-col>
            </v-row>
          </v-list-item-content>
        </v-list-item>
      </template>
    </v-list>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    items: [
      { header: "Your Cart" },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: `<span class="text--primary">Ali Connors</span>`,
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: `but I'm out of town this weekend.`,
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle: '<span class="text--primary">Sandra Adams</span> ',
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle: '<span class="text--primary">Trevor Hansen</span> ',
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle: '<span class="text--primary">Britta Holt</span>',
      },
    ],
    size: ["Foo", "Bar", "Fizz", "Buzz"],
  }),
};
</script>

<style></style>
