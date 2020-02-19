<template>
  <div class="fcontent">
    <div class="gallery-images-product w15">
      <a href="#">
        <img
          v-for="n in 4"
          :key="n"
          :src="showImageProduct(n)"
          :alt="altImageProduct(n)"
          class="slide-image-product img-fluid"
          :class="{ active: imageSelected == n }"
          @click.prevent="showImage(n)"
        />
      </a>
    </div>
    <div class="image-product w85">
      <img :src="showImageProduct(imageSelected)" :alt="altImageProduct(imageSelected)" class="img-fluid" />
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "ProductSlide",
  data() {
    return {
      imageSelected: 1
    };
  },
  computed: {
    ...mapGetters("productclient", {
      product: "product",
      colorActu: "colorSelected"
    })
  },
  methods: {
    showImageProduct(n) {
      return `${window.baseUrlImg}/client/products/${this.product.produit_reference}/${this.colorActu.couleur_libelle}/img${n}.jpg`;
    },
    altImageProduct(n) {
      return `${this.product.produit_libelle} | ${this.colorActu.libelle} | Image ${n}`;
    },
    showImage(n){
      this.imageSelected = n;
    }
  },
  watch: {
    colorActu(){
      this.imageSelected = 1;
    }
  }
};
</script>

<style scoped>
.slide-image-product {
  margin-bottom: 7.5px;
}

.image-product{
  padding-left: 40px;
}

.active{
  border: 2px solid var(--black);
}
</style>