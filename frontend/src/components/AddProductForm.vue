<script>
import { v4 as uuidv4 } from 'uuid';

export default {
  props: {
    defaultProduct: Object
  },
  data() {
    return {
      product:  JSON.parse(JSON.stringify(this.defaultProduct)),
    }
  },
  methods: {
      addProduct() {
          const p = {
              product_id: uuidv4(),
              product_name: this.product.productName,
              product_owner_name: this.product.productOwnerName,
              developers: this.product.developers.filter(developer => developer !== ''),
              scrum_master_name: this.product.scrumMasterName,
              start_date: this.product.startDate,
              methodology: this.product.methodology
          };
          this.$emit("new-product", JSON.stringify(p));
          this.product = JSON.parse(JSON.stringify(this.defaultProduct));
          this.$bvModal.hide('addProduct');
      }
  }
}
</script>

<template>
  <b-modal ref="addProductModal" id="addProduct" @ok="addProduct" title="Add a New Product" ok-title="Add Product" hide-header-close="true" hide-footer="true">
    <form class="product" @submit.prevent="addProduct">
      <label for="product_name">Product Name:</label>
      <input type="text" id="product_name required" v-model="product.productName" required>

      <label for="product_owner_name">Product Owner Name:</label>
      <input type="text" id="product_owner_name" v-model="product.productOwnerName" required>

      <label for="developers">Developers:</label>
      <div v-for="(developer, index) in product.developers" :key="index">
        <input type="text" id="developers" v-model="product.developers[index]">
      </div>

      <label for="scrum_master_name">Scrum Master Name:</label>
      <input type="text" id="scrum_master_name" v-model="product.scrumMasterName" required>

      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" v-model="product.startDate" required>

      <label for="methodology">Methodology:</label>
      <select id="methodology" v-model="product.methodology">
        <option>Agile</option>
        <option>Waterfall</option>
      </select>

      <div class="modal_footer">
        <b-button type="submit" variant="primary" @click="ok()">Add Product</b-button>
      </div>
    </form>
  </b-modal>
</template>

