import axios from 'axios';

const state = {
  about: []
};

const getters = {
  allAbout: state => state.about
};

const actions = {
  async fetchAbout ({ commit }) {
    const response = await axios.get('http://localhost/don/donau/public/backend/api/about/read.php');
    commit('setAbout', response.data.data)
  }
};

const mutations = {
  setAbout: (state, about) => (state.about = about)
};

export default {
  state,
  getters,
  actions,
  mutations
};