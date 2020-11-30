<template>
  <v-row class="d-flex text-start justify-center">
    <v-col>
      <span class="admin">Please choose your color:</span>
    </v-col>
    <v-col>
  
        <div class="colors" v-bind="alertColor">
  <div class="color" style="background-color: #e1e851" data-hex="#e1e851"></div>
  <div class="color" style="background-color: #8cd147" data-hex="#8cd147"></div>
  <div class="color" style="background-color: #4a9ccf" data-hex="#4a9ccf"></div>
  <div class="color" style="background-color: #661f45" data-hex="#661f45"></div>
  <div class="color" style="background-color: #1e2024" data-hex="#1e2024"></div>
</div>
   
    </v-col>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      text: "",
      colors: [
        {
          value: "red",
        },
        {
          value: "green",
        },
        {
          value: "blue",
        },
        {
          value: "cyan",
        },
      ],
    };
  },
  methods: {
    alertColor: function(){
      var el = document.getElementsByClassName("color");
      alert(el);
    }
    
  },
};
</script>

<style></style>
