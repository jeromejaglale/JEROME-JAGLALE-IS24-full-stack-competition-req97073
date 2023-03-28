<script>
export default {
    data() {
        return {
      	}
    },
    props: {
        products: Array
    }
}
</script>

<template>
  	<h2>Product List</h2>
    <b-table striped :items="products"></b-table>
</template>

