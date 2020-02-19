<template>
    <div>
        <products-filter class="w20"></products-filter>
        <div class="products w80 fcontent content-grid">
            <products-gallery class="product w25" v-for="product in listProducts" :key="product.produit_id" :product="product"></products-gallery>
        </div>
    </div>
</template>

<script>

import ProductsFilter from './ProductsFilter';
import ProductsGallery from './ProductsGallery';

export default {
    name: 'PageProducts',
    components: {
        ProductsFilter, ProductsGallery
    },
    props: ['listProducts']
}
</script>

<style scoped>
.product{
    padding: 5px;
}
</style>
