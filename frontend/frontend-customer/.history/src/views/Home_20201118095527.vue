<template>
  <div class="home" id="home-page">
    <v-content>
      <a class="slogan">Find your ideal style here.</a>
      <Collection />
      <a class="slogan-2">Best Sellers</a>
      <BestSeller />
      <a class="sloen-3">TRUSTED PARTNERS</a>
    </v-content>
  </div>
</template>

<script>
import Collection from "../components/Collection";
import BestSeller from "../components/BestSeller";

export default {
  components: {
    Collection,
    BestSeller
  },

  data: () => ({
    //
  }),
};
</script>
