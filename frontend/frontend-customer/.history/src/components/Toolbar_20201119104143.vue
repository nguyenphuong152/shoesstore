<template>
    <v-toolbar extended flat>
      <v-toolbar-title id ="logo">MEGO</v-toolbar-title>
      <v-spacer></v-spacer>
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
      <template v-slot:extension>
        <v-tabs align-with-title>
          <v-tab>Tab 1</v-tab>
          <v-tab>Tab 2</v-tab>
          <v-tab>Tab 3</v-tab>
    </v-tabs>
    </template>
    </v-toolbar>
</template>

<script>
export default {};
</script>

<style></style>
