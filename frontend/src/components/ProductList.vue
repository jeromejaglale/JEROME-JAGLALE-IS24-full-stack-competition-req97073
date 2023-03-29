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
	          { key: 'edit', label: '' },
	          { key: 'delete', label: '' }
	        ]
      	}
    },
    props: {
        products: Array
    }
}
</script>

<template>
  	<h2>Product List</h2>
    <b-table striped :items="products" :fields="fields">
		<template #cell(edit)="row">
			<div class="text-nowrap">
			<b-button size="sm">
			   Edit
			</b-button>
			</div>
		</template>
		<template #cell(delete)="row">
			<b-button size="sm">
			   Delete
			</b-button>
		</template>
	</b-table>
</template>

