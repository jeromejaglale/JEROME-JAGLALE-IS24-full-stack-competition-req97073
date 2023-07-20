import React from 'react'
import './App.css'

const ENDPOINT = 'https://fs.local/api/products';

function App() {
  
  // status: idle | loading | success | error
  const [status, setStatus] = React.useState('idle');
  const [productList, setProductList] = React.useState([]);

  async function handleSubmit(event) {
    event.preventDefault();
   
    setStatus('loading');
   
    const response = await fetch(ENDPOINT);
    const json = await response.json();
   
    if (json) {
      setStatus('success');
      console.log(json);
      setProductList(json);
    } else {
      setStatus('error');
    }
  }
   
  return (
    <>
      <form onSubmit={handleSubmit}>
        <input type="submit"></input>  
      </form>
     
      {status === 'error' && (
        <p>Something went wrong!</p>
      )}

      {productList.length} products

      <ul>
        {productList.map(product => 
          <li>{product.product_name}</li>
        )}
      </ul>
    </>
  ); 

}

export default App
