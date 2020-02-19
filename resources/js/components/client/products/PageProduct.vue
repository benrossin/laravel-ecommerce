<template>
  <div>
    <product-slide class="w60"></product-slide>
    <product-add-cart class="w40" :product="product" :sizes="sizes" :colors="colors"></product-add-cart>
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
  props: ["product", "sizes", "colors"]
};
</script>

<style scoped>
</style>