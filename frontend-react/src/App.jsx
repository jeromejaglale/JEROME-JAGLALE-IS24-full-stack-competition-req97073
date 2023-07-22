import React from 'react';
import './App.css';
import ProductList from './components/ProductList';
import ProductForm from './components/ProductForm';

function App() {

  return (
    <>
      <ProductForm />

      <h1>Product List</h1>
      <ProductList />
    </>
  ); 
}

export default App
