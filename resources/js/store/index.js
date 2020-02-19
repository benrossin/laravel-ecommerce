import Vue from 'vue'
import Vuex from 'vuex'
import productclient from './modules/client/product'
import productsclient from './modules/client/products'


Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    productclient, productsclient
  },
  strict: debug
})