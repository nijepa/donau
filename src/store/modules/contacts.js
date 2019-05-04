import axios from 'axios';

const state = {
  contacts: []
};

const getters = {
  allContacts: state => state.contacts
};

const actions = {
  async fetchContacts ({ commit }) {
    const response = await axios.get('http://localhost/don/donau/public/backend/api/contact/read.php');
    console.log(response.data);
    commit('setContacts', response.data.data)
  }
};

const mutations = {
  setContacts: (state, contacts) => (state.contacts = contacts)
};

export default {
  state,
  getters,
  actions,
  mutations
};