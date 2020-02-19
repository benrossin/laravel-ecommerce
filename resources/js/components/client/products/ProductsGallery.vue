<template>
  <div class="product">
    <a :href="routeProduct">
      <div class="content-img-product">
        <div v-if="product.remise_taux" class="label-promo">
            <span class="small-text">-{{ product.remise_taux }} %</span>
        </div>
        <img :src="imgPreview" alt="image preview" class="img-fluid" />
      </div>
      <div class="content-product">
        <span class="product-libelle">{{ product.produit_libelle }}</span>
        <div class="content-price">
            <span class="product-price" :class="{'crossed': product.remise_taux}">{{ product.produit_prix / 100 }} €</span>
          <span
            v-if="product.remise_taux"
            class="product-price product-price-discount"
          >{{ (product.produit_prix / 100) * ( 1 - (product.remise_taux / 100)) }} €</span>
        </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: "ProductsGallery",
  props: ["product"],
  computed: {
    imgPreview() {
      return `${window.baseUrlImg}/client/products/${this.product.produit_reference}/Preview/image_preview.jpg`;
    },
    routeProduct(){
        return `${window.baseUrl}/${this.product.sexe_url}/${this.product.categorie_url}/${this.product.souscategorie_url}/${this.product.produit_id}`;
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
