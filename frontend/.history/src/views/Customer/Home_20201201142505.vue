<template>
  <div class="app">
    <v-main>
      <div class="d-flex flex-column">
            <Banner />
      <v-container >
        <span class="slogan">Find your ideal style here.</span>
        <Collection />
      </v-container>
      <v-container mt-8>
         <span class="slogan">Best Sellers</span>
        <BestSeller />
      </v-container>
      <v-container my-16>
        <span class="title-normal">Trusted Partners</span>
        <Partner />
      </v-container>
      </div>
    </v-main>
  </div>
</template>

<script>
import Collection from "../../components/Customer/Collection";
import Banner from "../../components/Customer/Banner";
import BestSeller from "../../components/Customer/BestSeller";
import Partner from "../../components/Customer/Partner";

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
