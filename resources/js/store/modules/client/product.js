// initial state
const state = {
    product: null
}

// getters
const getters = {
    product: state => {
        return state.product;
    }
}

// actions
const actions = {
    setProduct: (context, product) => {
        context.commit('SET_PRODUCT', product);
    },
    setColorSelected: (context, color) => {
        context.commit('SET_COLOR_SELECTED', color);
    },
    setSizeSelected: (context, size) => {
        context.commit('SET_SIZE_SELECTED', size);
    },
    setQuantitySelected: (context, quantity) => {
        context.commit('SET_QUANTITY_SELECTED', quantity);
    }
}

// mutations
const mutations = {
    SET_PRODUCT: (state, product) => {
        state.product = product;
    },
    SET_COLOR_SELECTED: (state, color) => {
        state.product.couleur_select = color;
    },
    SET_SIZE_SELECTED: (state, size) => {
        state.product.taille_select = size;
    },
    SET_QUANTITY_SELECTED: (state, quantity) => {
        state.product.quantite = quantity;
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
