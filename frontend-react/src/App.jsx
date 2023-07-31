import React from 'react';
import './App.css';
import ProductList from './components/ProductList';
import ProductForm from './components/ProductForm';

function App() {

	const [showCreateProductForm, setShowCreateProductForm] = React.useState(false);

	function toggleProductForm() {
		setShowCreateProductForm(! showCreateProductForm);
	}

  return (
    <>
			<button onClick={toggleProductForm}>Create Product</button>    	
      {showCreateProductForm && <ProductForm toggleProductForm={toggleProductForm} />}

      <h1>Product List</h1>
      <ProductList />
    </>
  ); 
}

export default App
