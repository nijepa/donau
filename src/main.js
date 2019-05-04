import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store/store'
import './registerServiceWorker'
import AOS from 'aos'
import 'aos/dist/aos.css'

import vueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(vueSmoothScroll)
Vue.config.productionTip = false

new Vue({
  router,
  store,
  created () {
    AOS.init()
  },
  render: h => h(App)
}).$mount('#app')
