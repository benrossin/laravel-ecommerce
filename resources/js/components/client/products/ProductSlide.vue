<template>
  <div>
    <img :src="showImageProduct" :alt="product.produit_libelle"/>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "ProductSlide",
  computed: {
    ...mapGetters("productclient", {
      product: "product",
      colorActu: "colorSelected"
    }),
    showImageProduct(){
      return `${window.baseUrlImg}/client/products/${this.product.produit_reference}/${this.colorActu.couleur_libelle}/img1.jpg`;
    }
  }
};
</script>