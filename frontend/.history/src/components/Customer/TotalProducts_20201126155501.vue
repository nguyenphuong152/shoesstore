<template>
  <v-list three-line>
    <template v-for="(item, index) in items">
      <v-subheader class="admin-nav black--text"
        v-if="item.header"
        :key="item.header"
        v-text="item.header"
      ></v-subheader>

      <v-divider
        v-else-if="item.divider"
        :key="index"
       
      ></v-divider>

      <v-list-item v-else :key="item.title">
        <v-img :src="item.avatar" max-height="150" max-width="150"></v-img>
        <v-list-item-content class="text-start pl-5">
           
          <v-list-item-title v-html="item.title"></v-list-item-title>
          <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
        </v-list-item-content>
        <v-img :src="item.avatar" max-height="150" max-width="150"></v-img>
      </v-list-item>
    </template>
  </v-list>
</template>

<script>
export default {
  data: () => ({
    items: [
      { header: "Your Cart" },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: `<span class="text--primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: `<span class="text--primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle:
          '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle:
          '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?',
      },
      { divider: true, inset: true },
      {
        avatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle:
          '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
      },
    ],
  }),
};
</script>

<style></style>
