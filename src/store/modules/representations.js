import axios from 'axios';

const getDefaultState = () => {
  return {
    rep: []
  }
}

const state = {
  reps: [],
  rep: getDefaultState()
};

const getters = {
  allReps: state => state.reps,
  oneRep: state => state.rep
};

const actions = {
  async fetchReps ({ commit }) {
    const response = await axios.get('http://localhost/don/donau/public/backend/api/representation/read.php');
    commit('setReps', response.data.data)
  },
  async fetchRep ({ commit }, rep) {
    const response = await axios.get(
      `http://localhost/don/donau/public/backend/api/representation/read_single.php/?id=${rep.id}`,
      rep
    );
    //console.log(response.data);
    commit('setRep', response.data);
  },
  resetRepState ({ commit }) {
    commit('resetState')
  } 
};

const mutations = {
  setReps: (state, reps) => (state.reps = reps),
  setRep: (state, rep) => (state.rep = rep),
  resetState (state) {
    Object.assign(state, getDefaultState())
  }
  //   const index = state.reps.findIndex(rep => reps.id === rep.id);
  //   if (index !== -1) {
  //     state.reps.splice(index, 1, rep);
  //   }
  // }
};

export default {
  state,
  getters,
  actions,
  mutations
};