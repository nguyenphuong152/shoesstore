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
          <v-list-item-content >
           <v-row>
              <v-list-item-title
              v-html="item.title"
              class="admin"
            ></v-list-item-title>
           </v-row>
           <v-row>
              <v-list-item-subtitle
              class="admin"
              v-html="item.subtitle"
            ></v-list-item-subtitle>
           </v-row>
           <v-row>
              <v-list-item-subtitle
              class="admin"
              v-html="item.subtitle"
            ></v-list-item-subtitle>
           </v-row>
            <v-row class="pl-4 d-flex align-center">
              <v-col class="pa-0 admin " cols="4">
                <a>Quantity</a>
              </v-col>
              <v-col class="pa-0 admin" cols="3">
                <v-text-field single-line></v-text-field>
              </v-col>
              <v-col class="text-end admin">
                <a> Price</a>
              </v-col>
              
            </v-row>
            <v-row class="pl-4 d-flex align-center">
                 <v-btn small  outlined color="black">
              Remove
            </v-btn>
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
    ],
    size: ["Foo", "Bar", "Fizz", "Buzz"],
  }),
};
</script>

<style></style>
