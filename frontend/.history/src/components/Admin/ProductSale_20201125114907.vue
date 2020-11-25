<template>
  <v-container>
      <v-card class="text-start">
           <v-list dense>
      <a class="admin pl-2">Product Sale</a>
      <v-list-item-group
        v-model="selectedItem"
        color="primary"
      >
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
        >
         <v-list-item-content>
            <v-list-item-title v-text="item.text" class="text-start"></v-list-item-title>
          </v-list-item-content>
          <v-list-item-content>
            <v-list-item-title v-text="item.amount" class="text-end"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
    </v-list>
      </v-card>
  </v-container>
</template>

<script>
export default {
    data: () => ({
      selectedItem: 1,
      items: [
        { text: 'Real-Time', amount: '15000' },
        { text: 'Audience', amount: '1000' },
        { text: 'Conversions', amount: '1000' },
      ],
    }),

}
</script>

<style>

</style>