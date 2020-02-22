
// initial state
const state = {
  products: []
}

// getters
const getters = {
  products: state => {
    return state.products;
  }
}

// actions
const actions = {
  setProducts: (context, products) => {
    context.commit('SET_PRODUCTS', products);
  }
}

// mutations
const mutations = {
  SET_PRODUCTS: (state, products) => {
    state.products = products;
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}