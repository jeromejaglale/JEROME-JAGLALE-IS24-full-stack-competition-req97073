<script>
import { v4 as uuidv4 } from 'uuid';

export default {
  props: {
    currentProduct: Object
  },
  data() {
    return {
      product: this.currentProduct != null ? JSON.parse(JSON.stringify(this.currentProduct)) : {
              productId: '',
              productName: '',
              productOwnerName: '',
              developers: ['', '', '', '', ''],
              scrumMasterName: '',
              startDate: '2023-04-01',
              methodology: 'Agile'
            },
    }
  },
  watch: {
    currentProduct() {
      this.product = this.currentProduct != null ? JSON.parse(JSON.stringify(this.currentProduct)) : {
              productId: '',
              productName: '',
              productOwnerName: '',
              developers: ['', '', '', '', ''],
              scrumMasterName: '',
              startDate: '2023-04-01',
              methodology: 'Agile'
            };
    }
  },
  methods: {
      editProduct() {
        this.$emit("save-product-changes", this.product);
      },
      resetModal() {
        this.product = null;
      }
  }
}
</script>

<template>
  <b-modal id="editProductModal" @ok="editProduct" @hidden="resetModal" title="Edit Product" ok-title="Save Changes" hide-header-close="true">
    <form @submit.prevent="" class="product">
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
    </form>
  </b-modal>
</template>

