import React from 'react';
import './App.css';
import ProductList from './components/ProductList';
import ProductForm from './components/ProductForm';

function App() {

  return (
    <>
      <h1>Add product</h1>
      <ProductForm />

      <h1>Product List</h1>
      <ProductList />
    </>
  ); 
}

export default App
