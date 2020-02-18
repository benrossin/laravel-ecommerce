<template>
    <div>
        <ResultsFilter class="w20"></ResultsFilter>
        <div class="products w80 fcontent">
            <Product class="product w25" v-for="product in listProducts" :key="product.produit_id" :product="product"></Product>
        </div>
    </div>
</template>

<script>

import ResultsFilter from './Resultsfilter';
import Product from './Product';

export default {
    name: 'Products',
    components: {
        ResultsFilter, Product
    },
    props: ['listProducts']
}
</script>

<style scoped>
.product{
    padding: 5px;
}
</style>
