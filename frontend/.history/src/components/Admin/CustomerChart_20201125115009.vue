<template>
<v-card>
<canvas ref="myChart" width="200" height="50"></canvas>
</v-card>
</template>

<script>
import Chart from 'chart.js';

export default {
  name: 'monthly-sales-chart',
  mounted() {
    new Chart(this.$refs.myChart, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        datasets: [
          {
            label: '2018 Sales',
            data: [300, 700, 450, 750, 450]
          }
        ]
      }
    });
  }
}
</script>