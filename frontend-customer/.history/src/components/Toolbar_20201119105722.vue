<template>
  <v-toolbar extended flat>
    <v-row>
      <v-col cols="2">
        <v-toolbar-title id="logo">MEGO</v-toolbar-title>
      </v-col>
      <v-col class="d-flex justify-space-around">
        <v-tabs align-with-title>
          <v-tab>Tab 1</v-tab>
          <v-tab>Tab 2</v-tab>
          <v-tab>Tab 3</v-tab>
        </v-tabs>
      </v-col>
      <v-col cols="2" class="d-flex justify-end">
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
          <v-icon>mdi-account-outline</v-icon>
        </v-btn>
        <v-divider vertical inset></v-divider>
        <v-btn icon>
          <v-icon>mdi-cart-outline</v-icon>
        </v-btn>
      </v-col>
    </v-row>
  </v-toolbar>
</template>

<script>
export default {};
</script>

<style></style>
