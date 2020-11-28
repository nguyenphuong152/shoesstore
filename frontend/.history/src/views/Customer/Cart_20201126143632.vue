<template>
  <div class="cart app">
   <v-sheet color="grey lighten-3" height="120">
      <v-container py-8>
        <a class="slogan-3">Cart</a>
      </v-container>
    </v-sheet>
     <div>
       <v-container>
  <b-table striped hover :items="items" :fields="fields" class="text-start"></b-table>
       </v-container>
  </div>
  </div>
</template>

<script>


export default {
   data () {
      return {
        // Note `isActive` is left out and will not appear in the rendered table
        fields: ['first_name', 'last_name', 'age'],
        items: [
          { isActive: true, age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { isActive: false, age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { isActive: false, age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { isActive: true, age: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
      }
   }
}
</script>