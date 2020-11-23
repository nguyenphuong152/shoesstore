<template>
  <div class="app">
    <v-main>
      <Banner/>
      <a class="slogan justify-md-space-around">Find your ideal style here.</a>
      <v-container>
        <Collection />
      </v-container>
      <!-- <a class="slogan-2">Best Sellers</a>
      <BestSeller />
      <a class="slogan-3">TRUSTED PARTNERS</a>
      <Partner /> -->
    </v-main>
  </div>
</template>

<script>
import Collection from "../components/Collection";
import Banner from "../components/Banner";
// import BestSeller from "../components/BestSeller";
// import Partner from "../components/Partner";

export default {
  components: {
    Banner,
    Collection,
    // BestSeller,
    // Partner,
    
  },

  data: () => ({
    //
  }),
};
</script>
