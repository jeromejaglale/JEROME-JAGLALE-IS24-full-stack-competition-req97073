<script>
import { v4 as uuidv4 } from 'uuid';

export default {
  data() {
    return {
      product: {
        productId: '',
        productName: '',
        productOwnerName: '',
        developers: ['', '', '', '', ''],
        scrumMasterName: '',
        startDate: '2023-04-01',
        methodology: 'Agile'

      },
      productJSON: ''        
    }
  },

  methods: {
    submitForm() {
      const productJSON = {
        product_id: uuidv4(),
        product_name: this.product.productName,
        product_owner_name: this.product.productOwnerName,
        developers: this.product.developers.filter(developer => developer !== ''),
        scrum_master_name: this.product.scrumMasterName,
        start_date: this.product.startDate,
        methodology: this.product.methodology
      };

      this.productJSON = JSON.stringify(productJSON);
      this.$emit("new-product", this.productJSON );
    }
  }
}
</script>

<template>
  <div>
    <form @submit.prevent="submitForm">
      <label for="product_name">Product Name:</label>
      <input type="text" id="product_name" v-model="product.productName" required>

      <label for="product_owner_name">Product Owner Name:</label>
      <input type="text" id="product_owner_name" v-model="product.productOwnerName" required>

      <label for="developers">Developers:</label>
      <div v-for="(developer, index) in product.developers" :key="index">
        <input type="text" id="developers" v-model="product.developers[index]">
      </div>

      <label for="scrum_master_name">Scrum Master Name:</label>
      <input type="text" id="scrum_master_name" v-model="product.scrumMasterName" required>

      <label for="start_date">Start Date:</label>
      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" v-model="product.startDate" required>

      <label for="methodology">Methodology:</label>
      <select id="methodology" v-model="product.methodology">
        <option>Agile</option>
        <option>Waterfall</option>
      </select>

      <button type="submit">Add Product</button>
    </form>

    <div v-if="productJSON">
      <h2>Generated JSON:</h2>
      <pre>{{ productJSON }}</pre>
    </div>
  </div>
</template>

