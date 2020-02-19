<template>
  <div>
    <product-slide class="w60"></product-slide>
    <product-add-cart class="w40"></product-add-cart>
  </div>
</template>

<script>
import ProductAddCart from "./ProductAddCart";
import ProductSlide from "./ProductSlide";
import {  } from "vuex";

export default {
  name: "PageProduct",
  components: {
    ProductAddCart,
    ProductSlide
  },
  props: ["product", "colors", "sizes"],
  created(){
    this.product.produit_couleurs = this.colors;
    this.product.produit_tailles = this.sizes;
    this.$store.dispatch('productclient/setProduct', this.product);
  }
};
</script>

<style scoped>
</style>