<template>
  <div class="app">
    <v-main>
      <Banner />
      <v-container pt->
        <a class="slogan">Find your ideal style here.</a>
        <Collection />
      </v-container>
      <v-container>
         <a class="slogan">Best Sellers</a>
        <BestSeller />
      </v-container>
      <v-container mt-4>
        <a class="slogan-3">TRUSTED PARTNERS</a>
        <Partner />
      </v-container>
    </v-main>
  </div>
</template>

<script>
import Collection from "../components/Collection";
import Banner from "../components/Banner";
import BestSeller from "../components/BestSeller";
import Partner from "../components/Partner";

export default {
  components: {
    Banner,
    Collection,
    BestSeller,
    Partner,
  },

  data: () => ({
    //
  }),
};
</script>
