<template>
  <div class="product">
    <a href="#">
      <img :src="imgPreview" alt="image preview" class="img-fluid" />
      <div class="content-product">
        <span class="produit-libelle">{{ product.produit_libelle }}</span>
        <span class="produit-price">{{ product.produit_prix / 100 }} €</span>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: ["product"],
  computed: {
    imgPreview() {
      return `${window.baseUrl}/client/products/${this.product.produit_reference}/Preview/image_preview.jpg`;
    }
  }
};
</script>

<style scoped>
.content-product {
  padding: 15px 0;
}

.content-product span{
    display: block;
}

.produit-price{
    margin-top: 10px;
    font-size: 1.1em;
    font-weight: bold;
}
</style>
