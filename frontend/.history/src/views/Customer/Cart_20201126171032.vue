<template>
  <div class="cart app">
   <v-sheet color="grey lighten-3" height="120">
      <v-container py-8>
        <a class="slogan-3">Cart</a>
      </v-container>
    </v-sheet>
     <div>
       <v-container>
 <v-row>
         <v-col cols="8">
<totalProducts/>
         </v-col>
   <v-col>
<totalProducts/>
         </v-col>
       </v-row>
       </v-container>
      
  </div>
  </div>
</template>

<script>

import totalProducts from '../../components/Customer/Tets'


export default {
  components: {totalProducts},
   data () {
    
   }
}
</script>