<script setup>
// setup
</script>

<script>
import ProductList from './components/ProductList.vue'
import ProductForm from './components/ProductForm.vue'

export default {
    name: "app",
    components: {},
    data() {
        return {
            products: []
        }
    },
    methods: {
        async fetchData() {
            const res = await fetch(`http://206.12.96.202:3000/api/products`)
            this.products = await res.json()
        },
        addProduct(productJSON) {
          fetch('http://206.12.96.202:3000/api/products', {
                  method: 'POST',
                  body: productJSON,
                  headers: {
                      'Content-type': 'application/json; charset=UTF-8',
                  },
              })
              .then((response) => response.json())
              .then((json) => {
                  // refresh products table
                  this.fetchData()
              });
        }
    },
    mounted() {
        this.fetchData()
    }
};

</script>

<template>
  <main>
    <ProductForm @new-product="addProduct" />
    <p>Nb products: {{ products.length }}</p>
    <ProductList :products="products" />
  </main>
</template>


