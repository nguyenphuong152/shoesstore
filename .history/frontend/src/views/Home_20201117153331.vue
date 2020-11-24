<template>
  <div class="home" id="home-page">
    <a class ="slogan">Find your ideal style here.</a>
    <v-content>
    <Collection/>
   </v-content>
  </div>
</template>

<script>
import Collection from "../components/Collection"

export default {
 components: {
    Collection,
  },

  data: () => ({
    //
  }),
}
</script>
