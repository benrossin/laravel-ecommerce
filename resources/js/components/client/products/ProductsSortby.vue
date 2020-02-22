<template>
  <div>
    <select name="sortby" id="sortby" v-model="filter">
      <option value="normal">Filtrer</option>
      <option value="price-low-to-high">Prix (- cher)</option>
      <option value="price-high-to-low">Prix (+ cher)</option>
    </select>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import _ from "lodash";

export default {
  name: "ProductsSortby",
  data() {
    return {
      productsBefore: null,
      filter: "normal",
      urlParams: null
    };
  },
  computed: {
    ...mapGetters("productsclient", {
      products: "products"
    })
  },
  methods: {},
  watch: {
    filter(newValue) {
      switch (newValue) {
        case "price-low-to-high":
          this.$store.dispatch(
            "productsclient/setProducts",
            _.sortBy(this.products, ["produit_prix"])
          );
          this.urlParams.set("sortby", newValue);
          break;
        case "price-high-to-low":
          this.$store.dispatch(
            "productsclient/setProducts",
            _.sortBy(this.products, ["produit_prix"]).reverse()
          );
          this.urlParams.set("sortby", newValue);
          break;
        default:
          this.$store.dispatch(
            "productsclient/setProducts",
            this.productsBefore
          );
          this.urlParams.delete("sortby");
          break;
      }
      history.replaceState(
        {},
        "",
        decodeURIComponent(`${window.location.pathname}?${this.urlParams}`)
      );
    }
  },
  mounted() {
    this.productsBefore = this.products;
    this.urlParams = new URLSearchParams(window.location.search);
    if (this.urlParams.has("sortby")) {
      if (
        this.urlParams.get("sortby") == "price-low-to-high" ||
        this.urlParams.get("sortby") == "price-high-to-low"
      ) {
        this.filter = this.urlParams.get("sortby");
      }
    }
  }
};
</script>

<style scoped>
</style>