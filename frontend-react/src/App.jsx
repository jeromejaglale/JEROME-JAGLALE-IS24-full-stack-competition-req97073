import React from 'react';
import './App.css';
import ProductList from './components/ProductList';
import ProductForm from './components/ProductForm';
import EditProductForm from './components/EditProductForm';

const ENDPOINT = 'https://fs.local/api/products';

function App() {

	const [showCreateProductForm, setShowCreateProductForm] = React.useState(false);
	const [showEditProductForm, setShowEditProductForm] = React.useState(false);
	const [product, setProduct] = React.useState(null);

	function toggleProductForm() {
		setShowCreateProductForm(! showCreateProductForm);
	}

	async function showProductEditForm(id) {
		setShowEditProductForm(false);

		const url = `${ENDPOINT}/${id}`;
		const response = await fetch(url, {
	    method: 'GET',
	  });
		const json = await response.json();
		setProduct(json);

		setShowEditProductForm(true);
	}

  return (
    <>
			<button onClick={toggleProductForm}>Create Product</button>    	
      {showCreateProductForm && <ProductForm toggleProductForm={toggleProductForm} />}

      {showEditProductForm && <EditProductForm product={product} setShowEditProductForm={setShowEditProductForm} />}


      <h1>Product List</h1>
      <ProductList showProductEditForm={showProductEditForm} />
    </>
  ); 
}

export default App
