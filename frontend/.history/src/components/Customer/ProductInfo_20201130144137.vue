<template>
  <v-container class="text-start pa-0">
    <span class="product-detail--title">This is product's name</span>
    <br />
    <span class="product-detail--price">
      {{
        Intl.NumberFormat("en-EN", { maximumSignificantDigits: 3 }).format(
          1000000
        )
      }}</span
    >
    <br>
    <div class="form__field">
      <div class="form__label">
        <strong>Please choose a color:</strong>
      </div>
      <div class="form__input">
        <v-swatches
          v-model="color"
          :swatches="swatches"
          row-length="6"
          shapes="circles"
          show-border
          popover-x="left"
        ></v-swatches>
      </div>
    </div>
  </v-container>
</template>

<script>
import VSwatches from "vue-swatches";

// Import the styles too, typically in App.vue or main.js
import "vue-swatches/dist/vue-swatches.css";

export default {
  components: { VSwatches },
  data() {
    return {
      color: "#F64272",
      swatches: ["#F64272", "#F6648B", "#F493A7", "#F891A6", "#FFCCD5", ""],
    };
  },
};
</script>

<style></style>
