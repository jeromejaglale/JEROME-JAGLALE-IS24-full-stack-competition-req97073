<script setup> 
defineProps({})
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
            API_BASE_URL: 'http://localhost:3000/api/',
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
        async fetchProducts() {
          try {
            const res = await fetch(`${this.API_BASE_URL}products`);
            this.products = await res.json();
          } catch (error) {
            alert('Sorry, we could not retrieve the list of products. Please try again later.');
          }
        },
        addProduct(productJSON) {
          try {
            fetch(`${this.API_BASE_URL}products`, {
                    method: 'POST',
                    body: productJSON,
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                    },
                })
                .then((response) => response.json())
                .then((json) => {
                    // refresh products table
                    this.fetchProducts();
                });
          } catch (error) {
            alert('Sorry, we could not complete this operation. Please try again later.');
          }

        },
        async editProduct(productId) {
          this.currentProduct = null;
          try {
            const res = await fetch(`${this.API_BASE_URL}products/${productId}`);
            const p = await res.json();
            // pad developers array to always have 5 text fields
            const nbEmptyFields = 5 - p.developers.length;
            for (var i = 0; i < nbEmptyFields; i++) {
              p.developers.push('');
            };
            this.currentProduct = p;
          } catch (error) {
            alert('Sorry, this operation could not be completed. Please try again later.');
          }
        },
        async saveProductChanges(product) {
          const productId = product.product_id;
          try {
            fetch(`${this.API_BASE_URL}products/${productId}`, {
                    method: 'put',
                    body: JSON.stringify(product),
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                    },
                })
                .then((response) => response.json())
                .then((json) => {
                    // refresh products table
                    this.fetchProducts();
                    this.currentProduct = null;
                });
          } catch (error) {
            alert('Sorry, we could not complete this operation. Please try again later.');
          }
        }
    },
    mounted() {
        this.fetchProducts();
    }
};
</script>

<template>
  <h2>IMB Products</h2>

  <p class="infos">
    <span class="nb_products">
      Number of products: <strong>{{ products.length }}</strong>
    </span>
    <b-button v-b-modal.addProduct variant="primary" size="sm">Add a new product</b-button>
  </p>

  <ProductList :products="products" @edit-product="editProduct" />
  
  <!-- will appear in popup -->
  <AddProductForm :defaultProduct="defaultProduct" @new-product="addProduct" />

  <!-- will appear in popup -->
  <EditProductForm :currentProduct="currentProduct" @save-product-changes="saveProductChanges" />

</template>


