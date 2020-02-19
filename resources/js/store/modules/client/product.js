// initial state
const state = {
    product: null,
    colorSelected: null,
    sizeSelected: null,
    quantitySelected: 1
}

// getters
const getters = {
    product: state => {
        return state.product;
    },
    colorSelected: state => {
        return state.colorSelected;
    },
    sizeSelected: state => {
        return state.sizeSelected;
    },
    quantitySelected: state => {
        return state.quantitySelected;
    }
}

// actions
const actions = {
    setProduct: (context, product) => {
        context.commit('SET_PRODUCT', product);
        context.commit('SET_COLOR_SELECTED', product.produit_couleurs[0]);
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
        state.colorSelected = color;
    },
    SET_SIZE_SELECTED: (state, size) => {
        state.sizeSelected = size;
    },
    SET_QUANTITY_SELECTED: (state, quantity) => {
        state.quantity = quantity;
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
