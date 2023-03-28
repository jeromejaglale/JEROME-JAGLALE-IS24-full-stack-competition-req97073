<script setup>
// TODO
</script>

<script>
import ProductList from './components/ProductList.vue'

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
        addProduct(productName) {
            console.log("Product added: " + productName);
            // console.log("test: " + uniqueId('product-'))
            // this.ToDoItems.push({id:uniqueId('todo-'), label: toDoLabel, done: false});

            fetch('206.12.96.202:3000/api/products', {
                    method: 'POST',
                    body: JSON.stringify({
                        title: productName,
                        body: productName,
                        userId: 1,
                    }),
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                    },
                })
                .then((response) => response.json())
                .then((json) => {
                    // this.products.push(json)
                    console.log(json)
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
    <ProductList :products="products" />
<!--     <TestTable />
    <ProductForm @product-added="addProduct" />
    <TableSample :products="products"/> -->
  </main>
</template>


