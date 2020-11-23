<template>
  <div class="home" id="home-page">
    <v-content>
      <a class="slogan">Find your ideal style here.</a>
      <Collection />
      <a class="slogan-2">Best Sellers</a>
      <BestSeller />
      <a class="slogan-3">TRUSTED PARTNERS</a>
      <Partner />
    </v-content>
  </div>
</template>

<script>
import Collection from "../components/Collection";
import BestSeller from "../components/BestSeller";
import Partner from "../components/Partner";

export default {
  components: {
    Collection,
    BestSeller,
    Partner
  },

  data: () => ({
    //
  }),
};
</script>
