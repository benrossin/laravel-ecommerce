<template>
  <div>
    <product-slide class="w50"></product-slide>
    <product-add-cart class="w50"></product-add-cart>
  </div>
</template>

<script>
import ProductAddCart from "./ProductAddCart";
import ProductSlide from "./ProductSlide";

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
    this.product.couleur_select = this.product.produit_couleurs[0];
    this.product.taille_select = null;
    this.product.quantite = 1;
    this.$store.dispatch('productclient/setProduct', this.product);
  }
};
</script>

<style scoped>
</style>