<script setup>
// setup
</script>

<script>
import ProductList from './components/ProductList.vue'
import AddProductForm from './components/AddProductForm.vue'
import EditProductForm from './components/EditProductForm.vue'


export default {
    name: "app",
    components: {},
    data() {
        return {
            products: [],
            defaultProduct: {
              productId: '',
              productName: '',
              productOwnerName: '',
              developers: ['', '', '', '', ''],
              scrumMasterName: '',
              startDate: '2023-04-01',
              methodology: 'Agile'
            },
            currentProduct: null
        };
    },
    methods: {
        async fetchData() {
            const res = await fetch(`http://206.12.96.202:3000/api/products`);
            this.products = await res.json();
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
                  this.fetchData();
              });
        },
        async editProduct(productId) {
          this.currentProduct = null;
          const res = await fetch(`http://206.12.96.202:3000/api/products/${productId}`);
          const p = await res.json();
          // pad developers array to always have 5 text fields
          const nbEmptyFields = 5 - p.developers.length;
          for (var i = 0; i < nbEmptyFields; i++) {
            p.developers.push('');
          };
          this.currentProduct = p;
        },
        async saveProductChanges(product) {
          const productId = product.product_id;
          fetch(`http://206.12.96.202:3000/api/products/${productId}`, {
                  method: 'put',
                  body: JSON.stringify(product),
                  headers: {
                      'Content-type': 'application/json; charset=UTF-8',
                  },
              })
              .then((response) => response.json())
              .then((json) => {
                  // refresh products table
                  this.fetchData();

                  // close edit form
                  this.currentProduct = null;
              });
        }
    },
    mounted() {
        this.fetchData();
    }
};
</script>

<template>
  <main>
    <EditProductForm v-if="currentProduct" :currentProduct="currentProduct" @save-product-changes="saveProductChanges" />
    <AddProductForm :defaultProduct="defaultProduct" @new-product="addProduct" />
    <p>Nb products: {{ products.length }}</p>
    <ProductList :products="products" @edit-product="editProduct" />
  </main>
</template>


