import Vue from 'vue';
import Vuetify from 'vuetify/lib';


Vue.use(Vuetify);

const vuetify = new Vuetify({
    theme: {
      themes: {
        light: {
          primary: '#000',
          secondary: '#b0bec5',
          accent: '#8c9eff',
          error: '#b71c1c',
        },
      },
    },
  })

export default new Vuetify({
    vuetify
});
