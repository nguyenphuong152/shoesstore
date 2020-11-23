<template>
    <v-list>
      <v-list-item-group v-model="model">
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
        >
          <v-list-item-content>
            <v-list-item-title v-text="item.text"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
    </v-list>
</template>

<script>
export default {
data: () => ({
      items: [
        {
          text: 'New Arrivals',
        },
        {
          text: 'Best Sellers',
        },
        {
          text: 'Sale',
        },
      ],
      model: 1,
    }),
}
</script>

<style>

</style>