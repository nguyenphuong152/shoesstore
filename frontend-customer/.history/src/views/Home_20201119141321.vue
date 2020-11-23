<template>
  <div class="app">
    <v-main>
      <div class="d-flex flex-column">
            <Banner />
      <v-container >
        <a class="slogan">Find your ideal style here.</a>
        <Collection />
      </v-container>
      <v-container mt-8>
         <a class="slogan">Best Sellers</a>
        <BestSeller />
      </v-container>
      <v-container mt-8>
        <a class="slogan-3">Trusted Partners</a>
        <Partner />
      </v-container>
      </div>
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
