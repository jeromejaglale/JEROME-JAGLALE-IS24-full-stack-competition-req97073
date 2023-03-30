<script>
import { v4 as uuidv4 } from 'uuid';

export default {
  props: {
    currentProduct: Object
  },
  data() {
    return {
      product:  {...this.currentProduct},
    }
  },
  methods: {
      submitForm() {
        this.$emit("save-product-changes", this.product);
      }
  }
}
</script>

<template>
  <div>
    <h2>Edit Product</h2>
    <form @submit.prevent="submitForm">
      <label for="product_name">Product Name:</label>
      <input type="text" id="product_name" v-model="product.product_name" required>

      <label for="product_owner_name">Product Owner Name:</label>
      <input type="text" id="product_owner_name" v-model="product.product_owner_name" required>

      <label for="developers">Developers:</label>
      <div v-for="(developer, index) in product.developers" :key="index">
        <input type="text" id="developers" v-model="product.developers[index]">
      </div>

      <label for="scrum_master_name">Scrum Master Name:</label>
      <input type="text" id="scrum_master_name" v-model="product.scrum_master_name" required>

      <label for="methodology">Methodology:</label>
      <select id="methodology" v-model="product.methodology">
        <option>Agile</option>
        <option>Waterfall</option>
      </select>

      <button type="submit">Save changes</button>
    </form>
  </div>
</template>

