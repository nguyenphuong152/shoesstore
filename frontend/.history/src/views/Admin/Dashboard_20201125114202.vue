<template>
  <v-container class="admin pa-0">
      <v-row >
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
                   v-if="item.title === 'PRODUCTS'"
                     class="ml-2 mt-5"
                    outlined
                    rounded
                    small
                  >
                   EDIT
                  </v-btn>
                   <v-btn
                    v-else
                    class="ml-2 mt-5"
                    outlined
                    rounded
                    small
                  >
                    DETAIL
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
      <v-row>
        <v-col>
<productsale/>
        </v-col>
      </v-row>
     
  </v-container>
</template>

<script>
import productsale from "../../components/Admin/ProductSale"
//import cuschart from "../../components/Admin/CustomerChart";

export default {
  components: {productsale},
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