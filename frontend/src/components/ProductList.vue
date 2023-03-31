<script>
export default {
    data() {
        return {
	        fields: [
	          { key: 'product_id', label: 'Number'},
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
    <b-table striped :items="products" :fields="fields">
		<template #cell(edit)="row">
			<b-button v-b-modal.editProductModal variant="primary" size="sm" @click="clickEdit(row.item.product_id)">
			   Edit
			</b-button>
		</template>
		<template #cell(developers)="row">
			{{ row.item.developers.filter(developer => developer != null).join(', ') }}
		</template>
		<template #cell(product_id)="row">
			<span :title="row.item.product_id">{{ row.item.product_id.substr(0, 15) }}..</span>
		</template>
	</b-table>
</template>
