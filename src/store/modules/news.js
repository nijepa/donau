import axios from 'axios';

const state = {
  news: []
};

const getters = {
  allNews: state => state.news
};

const actions = {
  async fetchNews ({ commit }) {
    const response = await axios.get('http://localhost/don/donau/public/backend/api/news/read.php');
    commit('setNews', response.data.data)
  }
};

const mutations = {
  setNews: (state, news) => (state.news = news)
};

export default {
  state,
  getters,
  actions,
  mutations
};