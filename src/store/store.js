import Vue from 'vue'
import Vuex from 'vuex'
import representations from './modules/representations';
import products from './modules/products';
import about from './modules/about';
import contacts from './modules/contacts';
import owner from './modules/owner';
import repDet from './modules/repDet';
import news from './modules/news';

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    representations,
    products,
    about,
    contacts,
    owner,
    repDet,
    news
  }
})
