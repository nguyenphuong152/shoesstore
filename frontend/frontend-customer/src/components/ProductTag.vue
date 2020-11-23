<template>
<v-container text-start>
     <div class="title-collection">Product Tags</div>
 <v-chip-group v-model="neighborhoods" column multiple>
    <v-chip filter outlined>
      Shoes
    </v-chip>
    <v-chip filter outlined>
      Sneaker
    </v-chip>
    <v-chip filter outlined>
     Sandal
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
