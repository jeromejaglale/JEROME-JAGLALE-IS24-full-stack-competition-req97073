import React from 'react';
import useSWR from 'swr';

async function fetcher(endpoint) {
  const response = await fetch(endpoint);
  const json = await response.json();
  return json;
}

const ENDPOINT = 'https://fs.local/api/products';

function ProductList() {
  // status: idle | loading | success | error
  const [status, setStatus] = React.useState('idle');
	const { data, isLoading, error } = useSWR(ENDPOINT, fetcher);
  
  console.log(error);

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
		      {data.length} products
		      <ul>
		        {data.map(product => 
		          <li>{product.product_name}</li>
		        )}
		      </ul>
	      </>
      )}

    </>
  ); 
}

export default ProductList;
