import React from 'react';
import useSWR from 'swr';

async function fetcher(endpoint) {
  const response = await fetch(endpoint);
  const json = await response.json();
  return json;
}

const ENDPOINT = 'https://fs.local/api/products';

function ProductList({showProductEditForm}) {
  // status: idle | loading | success | error
  const [status, setStatus] = React.useState('idle');
	const { data, isLoading, error } = useSWR(ENDPOINT, fetcher);
  
  return (
    <>
	    {isLoading && (
		    <p>Loading products…</p>
		  )}

	    {error && (
		    <p>Sorry, the products could not be retrieved.</p>
		  )}

			{data && (
	      <>
		      <p><strong>{data.length} products</strong></p>
		      <table>
		      	<thead>
		      		<tr>
			      		<th>Id</th>
			      		<th>Name</th>
			      		<th>Owner</th>
			      		<th>Developers</th>
			      		<th>Scrum Master</th>
			      		<th>Start Date</th>
			      		<th>Methodology</th>
			      		<th></th>
			      	</tr>
		      	</thead>
		      	<tbody>
		      		{data.map(product => 
		          	<tr key={product.product_id}>
		          		<td>{product.product_id}</td>
		          		<td>{product.product_name}</td>
		          		<td>{product.product_owner_name}</td>
		          		<td>{product.developers.filter(developer => developer != null).join(', ')}</td>
		          		<td>{product.scrum_master_name}</td>
		          		<td>{product.start_date}</td>
		          		<td>{product.methodology}</td>
		          		<td><button onClick={() => showProductEditForm(product.product_id)}>Edit</button></td>
		          	</tr>
		        	)}
		      	</tbody>
		      </table>
	      </>
      )}

    </>
  ); 
}

export default ProductList;
