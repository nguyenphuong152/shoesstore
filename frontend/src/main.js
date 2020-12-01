import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify';
import router from './router'
import '../sass/style.scss'
<<<<<<< HEAD
import axios from 'axios'
import VueAxios from 'vue-axios'
=======
>>>>>>> e5b2ba6... design home but get sth wrong in router

Vue.config.productionTip = false
Vue.use(VueAxios, axios)

new Vue({
  vuetify,
  router,
  render: h => h(App)
}).$mount('#app')
