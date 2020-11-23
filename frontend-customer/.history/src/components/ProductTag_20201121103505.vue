<template>
<v-container>
     <div class="title-collection">Product Tags</div>
 <v-chip-group v-model="neighborhoods" column multiple>
    <v-chip filter outlined>
      Snowy Rock Place
    </v-chip>
    <v-chip filter outlined>
      Honeylane Circle
    </v-chip>
    <v-chip filter outlined>
      Donna Drive
    </v-chip>
    <v-chip filter outlined>
      Elaine Street
    </v-chip>
    <v-chip filter outlined>
      Court Street
    </v-chip>
    <v-chip filter outlined>
      Kennedy Park
    </v-chip>
  </v-chip-group>
</v-container>
 
</template>

<script>
export default {
     data: () => ({
      neighborhoods: [1],
    }),
};
</script>

<style></style>
