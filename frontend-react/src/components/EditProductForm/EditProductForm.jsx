import React from 'react';
import { useSWRConfig } from 'swr';

const ENDPOINT = 'https://fs.local/api/products';

function EditProductForm({product, setShowEditProductForm}) {

  const [productName, setProductName] = React.useState(product.product_name);
  const [productOwnerName, setProductOwnerName] = React.useState(product.product_owner_name);
  const [scrumMasterName, setScrumMasterName] = React.useState(product.scrum_master_name);
  const [startDate, setStartDate] = React.useState(product.start_date);
  const [methodology, setMethodology] = React.useState(product.methodology);

	const { mutate } = useSWRConfig()

	async function saveProductChanges(e) {
	  e.preventDefault();

		const data = {
			product_id: product.product_id,
			product_name: productName,
			product_owner_name: productOwnerName,
			// developers: this.product.developers.filter(developer => developer !== ''),
			developers: ['Dev 1'],
			scrum_master_name: scrumMasterName,
			start_date: startDate,
			methodology: methodology
		};

		const url = `${ENDPOINT}/${product.product_id}`;

		const response = await fetch(url, {
		    method: 'PUT',
		    body: JSON.stringify(data),
		  });
		
		const json = await response.json();
		
		mutate(ENDPOINT);
	  setShowEditProductForm(false);
	}

  return (
  	<>
			<h2>Edit product</h2>
			<form onSubmit={saveProductChanges}>
					<input type="hidden" name="id" value={product.product_id} />

			    <label htmlFor="product_name">Product Name:</label>
			    <input type="text" id="product_name" value={productName} onChange={(e) => setProductName(e.target.value)} required />

			    <label htmlFor="product_owner_name">Product Owner Name:</label>
			    <input type="text" id="product_owner_name" value={productOwnerName} onChange={(e) => setProductOwnerName(e.target.value)} required />

			{/*
			    <label htmlFor="developers">Developers:</label>
			    <div v-for="(developer, index) in product.developers" :key="index">
			      <input type="text" id="developers" v-model="product.developers[index]" :required="index == 0">
			    </div>
			*/}

			    <label htmlFor="scrum_master_name">Scrum Master Name:</label>
			    <input type="text" id="scrum_master_name" value={scrumMasterName} onChange={(e) => setScrumMasterName(e.target.value)} required />

			    <label htmlFor="start_date">Start Date:</label>
			    <input type="date" id="start_date" value={startDate} onChange={(e) => setStartDate(e.target.value)} required />

			    <label htmlFor="methodology">Methodology:</label>
			    <select id="methodology" value={methodology} onChange={(e) => setMethodology(e.target.value)}>
			      <option>Agile</option>
			      <option>Waterfall</option>
			    </select>

			    <input type="submit" value="Save" />
			  </form>
  	</>
  );
}

export default EditProductForm;
