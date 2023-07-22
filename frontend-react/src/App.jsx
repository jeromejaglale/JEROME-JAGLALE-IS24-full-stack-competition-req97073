import React from 'react';
import './App.css';
import ProductList from './components/ProductList';

function App() {
  return (
    <>
      <form>
        <label htmlFor="product_name">Product Name:</label>
        <input type="text" id="product_name" required />

        <label htmlFor="product_owner_name">Product Owner Name:</label>
        <input type="text" id="product_owner_name" required />

{/*
        <label htmlFor="developers">Developers:</label>
        <div v-for="(developer, index) in product.developers" :key="index">
          <input type="text" id="developers" v-model="product.developers[index]" :required="index == 0">
        </div>
*/}

        <label htmlFor="scrum_master_name">Scrum Master Name:</label>
        <input type="text" id="scrum_master_name" required />

        <label htmlFor="start_date">Start Date:</label>
        <input type="date" id="start_date" required />

        <label htmlFor="methodology">Methodology:</label>
        <select id="methodology">
          <option>Agile</option>
          <option>Waterfall</option>
        </select>

        <input type="submit" value="Add Product" />
      </form>

      {/* Product List */}
      <h1>Product List</h1>
      <ProductList />
    </>
  ); 
}

export default App
