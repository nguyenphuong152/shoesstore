<template>
  <v-footer class="white" padless>
    <v-row justify="center" no-gutters>
      <v-btn
        v-for="link in links"
        :key="link"
        color="black"
        text
        rounded
        class="my-2 admin"
      >
        {{ link }}
      </v-btn>
      <v-col class="white py-4 text-center fluid footer-text" cols="12">
        {{ new Date().getFullYear() }} — <strong>Made with love</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    links: ["Home", "About Us", "Team", "Services", "Blog", "Contact Us"],
  }),
};
</script>

<style></style>
