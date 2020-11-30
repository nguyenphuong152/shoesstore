<template>
   <div class="form__field text-start admin">
       <v-row>
           <v-col>
  <div class="form__label ">
          <span>Please choose a color:</span>
        </div>
           </v-col>
           <v-col>
 <div class="form__input">
          <v-swatches
            v-model="color"
            :swatches="swatches"
            row-length="6"
            shapes="circles"
            show-border
            popover-x="left"
            spacing-size="10"
          ></v-swatches>
        </div>
           </v-col>
       </v-row>
      
       
      </div>
</template>

<script>
import VSwatches from "vue-swatches";
import "vue-swatches/dist/vue-swatches.css";

export default {
components: { VSwatches },
  data() {
    return {
      color: "#F64272",
      swatches: ["#F64272", "#F6648B", "#F493A7", "#F891A6", "#FFCCD5", ""],
    };
  },
}
</script>

<style>

</style>