<template>
  <v-card>
    <canvas ref="myChart" :styles="myStyles"></canvas>
  </v-card>
</template>

<script>
import Chart from "chart.js";

export default {
  name: "monthly-sales-chart",
  mounted() {
    new Chart(this.$refs.myChart, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May","June","July","Aug","Sep","Oct","Nov","Dec"],
        datasets: [
          {
            label: "Total Customers",
            borderColor: '#FB8C00',
    backgroundColor: '#FB8C00',
            data: [300, 700, 450, 750, 450,100,20,8,41,15,60,12],
          },
        ],
      },
    });
  },
  computed: {
    myStyles() {
      return { height: "100px" };
    },
  },
};
</script>
