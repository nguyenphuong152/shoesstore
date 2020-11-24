<template>
  <div class="home" id="home-page">
    <v-content>
      <a class="slogan">Find your ideal style here.</a>
      <Collection />
      <a class="slogan-2">Best Sellers</a>
    </v-content>
  </div>
</template>

<script>
import Collection from "../components/Collection";

export default {
  components: {
    Collection,
  },

  data: () => ({
    //
  }),
};
</script>
