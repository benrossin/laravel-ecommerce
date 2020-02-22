<template>
  <div>
    <products-filter class="w20"></products-filter>
    <div class="products w80 fcontent">
      <products-gallery
        class="product w25"
        v-for="product in products"
        :key="product.produit_id"
        :product="product"
      ></products-gallery>
    </div>
  </div>
</template>

<script>
import ProductsFilter from "./ProductsFilter";
import ProductsGallery from "./ProductsGallery";
import { mapGetters } from "vuex";

export default {
  name: "PageProducts",
  components: {
    ProductsFilter,
    ProductsGallery
  },
  props: ["listProducts"],
  computed: {
    ...mapGetters("productsclient", {
      products: "products"
    })
  },
  created() {
    this.$store.dispatch("productsclient/setProducts", this.listProducts);
  }
};
</script>

<style scoped>
.product {
  padding: 5px;
}
</style>
