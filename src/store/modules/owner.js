import axios from 'axios';

const state = {
  owner: []
};

const getters = {
  allOwner: state => state.owner
};

const actions = {
  async fetchOwner ({ commit }) {
    const response = await axios.get('http://localhost/don/donau/public/backend/api/owner/read.php');
    commit('setOwner', response.data.data)
  }
};

const mutations = {
  setOwner: (state, owner) => (state.owner = owner)
};

export default {
  state,
  getters,
  actions,
  mutations
};