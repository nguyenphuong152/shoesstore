<template>
  <v-container class="admin pa-0">
      <v-row  :align="align">
         <v-col
          v-for="(item, i) in items"
          :key="i"
        >
          <v-card
            :color="item.color"
            dark
            flat
          >
            <div class="d-flex flex-no-wrap justify-space-between ">
              <div>
                <v-card-title
                  class="admin-nav"
                  v-text="item.title"
                ></v-card-title>

                <h2 v-text="item.amount" class="font-weight-bold white--text"></h2>

                <v-card-actions>
                  <v-btn
                    class="ml-2 mt-3"
                    fab
                    icon
                    height="40px"
                    right
                    width="40px"
                  >
                    <v-icon size="40px">mdi-chevron-right</v-icon>
                  </v-btn>
                </v-card-actions>
              </div>

              <v-avatar
                class="ma-3"
                size="125"
                tile
              >
                <v-img :src="item.src"></v-img>
              </v-avatar>
            </div>
          </v-card>
        </v-col>
      </v-row>
  </v-container>
</template>

<script>
export default {
   data: () => ({
      items: [
        {
          color: 'green darken-1',
          src: require("../../assets/checklist.png"),
          title: 'ORDERS',
          amount: '100',
        },
        {
          color: 'light-green darken-1',
          src: require("../../assets/box.png"),
          title: 'PRODUCTS',
          amount: '100',
        },
        {
          color: 'lime darken-1',
          src:  require("../../assets/customer.png"),
          title: 'CUSTOMERS',
          amount: '100',
        },
      ],
    }),

}
</script>

<style>

</style>