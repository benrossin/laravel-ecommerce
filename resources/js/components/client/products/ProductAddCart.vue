<template>
  <div class="product-addcart">
    <span class="product-name">{{ product.produit_libelle }}</span>
    <div class="content-price">
      <span
        class="product-price"
        :class="{'crossed': product.remise_taux}"
      >{{ product.produit_prix / 100 }} €</span>
      <span
        v-if="product.remise_taux"
        class="product-price product-price-discount"
      >{{ (product.produit_prix / 100) * ( 1 - (product.remise_taux / 100)) }} €</span>
    </div>
    <div class="color">
      <label for="color" class="lbl-color">Couleur</label>
      <div class="fcontent">
        <button
          v-for="color in product.produit_couleurs"
          :key="color.couleur_id"
          @click.prevent="chooseColor(color)"
          :class="{ active: color == colorActu }"
          :style="{ backgroundColor: color.couleur_hexa }"
        ></button>
      </div>
    </div>
    <div class="size">
      <label for="size" class="lbl-size">Taille</label>
      <div class="fcontent">
        <button
          v-for="size in product.produit_tailles"
          :key="size.taille_id"
          @click.prevent="chooseSize(size)"
          :disabled="size.stock_quantite == 0"
          :class="{ active: size == sizeActu }"
        >{{ size.taille_libelle }}</button>
      </div>
    </div>
    <div class="content-bottom-addcart">
      <span class="error-addcart">{{ errorAddCart }}</span>
      <div class="content-buttons-addcart fcontent">
        <select class="select-quantity w25" v-model="quantityActu">
          <option v-for="index in 10" :key="index" :value="index">{{ index }}</option>
        </select>
        <button class="btn-black btn-addcart" @click.prevent="addToCart()">Acheter</button>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  name: "ProductAddCart",
  data() {
    return {
      errorAddCart: null
    };
  },
  computed: {
    ...mapGetters('productclient', {
      product: 'product',
      sizeActu: 'sizeSelected',
      colorActu: 'colorSelected',
      quantityActu: 'quantitySelected'
    })
  },
  methods: {
    chooseSize(size) {
      this.errorAddCart = null;
      if(this.sizeActu != size){
        this.$store.dispatch('productclient/setSizeSelected', size);
      }
    },
    chooseColor(color) {
      this.errorAddCart = null;
      if(this.colorActu != color){
        this.$store.dispatch('productclient/setColorSelected', color);
      }
    },
    addToCart() {
      if (this.sizeActu && this.colorActu) {
      } else {
        this.errorAddCart = "Merci de sélectionner une taille et une couleur";
      }
    }
  }
};
</script>

<style scoped>
.product-addcart{
  padding-left: 150px;
}

.product-name {
  font-size: 18px;
  letter-spacing: 1px;
  padding: 0.5em 0 2rem 0;
  display: block;
}

.color {
  margin-top: 30px;
}

.color,
.size {
  padding: 25px 0 15px 0;
  border-bottom: 2px solid var(--grey);
}

.lbl-color,
.lbl-size {
  display: block;
  font-size: 16px;
  margin-bottom: 0.75rem;
}

.size button,
.color button {
  border: 0;
  font-size: 16px;
  cursor: pointer;
  margin-right: 1em;
  padding: 5px;
  outline: 0;
  border-bottom: 2px solid var(--white);
}

.size button {
  background-color: transparent;
  width: 2.5em;
}

.color button {
  height: 25px;
  width: 25px;
}

.active {
  border-color: var(--black) !important;
}

.content-bottom-addcart {
  margin-top: 75px;
}

.error-addcart {
  text-align: center;
  padding: 5px;
  display: block;
}

.content-buttons-addcart {
  padding: 15px 0;
}

.select-quantity {
  cursor: pointer;
  outline: 0;
  border: 2px solid var(--grey);
  background-color: transparent;
  transition: 0.25s all;
  font-size: 16px;
}

.select-quantity:hover {
  border-color: var(--black);
}

.btn-addcart {
  margin-left: 25px;
  flex: 1;
  padding: 20px;
  cursor: pointer;
  outline: 0;
}
</style>