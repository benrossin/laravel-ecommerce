<template>
  <div class="product">
    <a href="#">
      <div class="content-img-product">
        <div v-if="product.remise_taux" class="label-promo">
            <span class="small-text">-{{ product.remise_taux }} %</span>
        </div>
        <img :src="imgPreview" alt="image preview" class="img-fluid" />
      </div>
      <div class="content-product">
        <span class="produit-libelle">{{ product.produit_libelle }}</span>
        <div class="content-price">
          <span class="produit-price">
            <del v-if="product.remise_taux">{{ product.produit_prix / 100 }} €</del>
          </span>
          <span
            v-if="product.remise_taux"
            class="produit-price produit-price-discount"
          >{{ (product.produit_prix / 100) * ( 1 - (product.remise_taux / 100)) }} €</span>
        </div>
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

.content-product span {
  display: block;
}

.produit-price {
  margin-top: 10px;
  font-size: 1.1em;
  font-weight: bold;
}

.produit-price-discount {
  color: var(--red);
}

.content-price {
  display: flex;
}

.produit-price-discount {
  margin-left: 5px;
}

.content-img-product {
  position: relative;
}

.label-promo{
    background-color: var(--white);
    color: var(--red);
    position: absolute;
    top: 15px;
    left: 0;
    padding: 0 2.5px;
}
</style>
