<script>
export default {
    data() {
        return {
	        fields: [
	          { key: 'product_id', label: 'Id'},
	          { key: 'product_name', label: 'Name'},
	          { key: 'product_owner_name', label: 'Owner'},
	          { key: 'developers', label: 'Developers'},
	          { key: 'scrum_master_name', label: 'Scrum Master'},
	          { key: 'start_date', label: 'Start Date'},
	          { key: 'methodology', label: 'Methodology'},
	          { key: 'edit', label: '' }
	        ]
      	}
    },
    props: {
        products: Array
    },
    methods: {
      clickEdit(product_id) {
	  	this.$emit("edit-product", product_id);
      }
  }
}
</script>

<template>
  	<h2>Product List</h2>
    <b-table striped :items="products" :fields="fields">
		<template #cell(edit)="row">
			<b-button v-b-modal.editProductModal size="sm" @click="clickEdit(row.item.product_id)">
			   Edit
			</b-button>
		</template>
	</b-table>
</template>

