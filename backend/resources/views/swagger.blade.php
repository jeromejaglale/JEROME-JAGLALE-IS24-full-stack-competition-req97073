<!doctype html>
<html>
  <head>
    <title>defaultTitle</title>
    <style type="text/css">
      body {
        font-family: Trebuchet MS, sans-serif;
        font-size: 15px;
        color: #444;
        margin-right: 24px;
      }
      
      h1  {
        font-size: 25px;
      }
      h2  {
        font-size: 20px;
      }
      h3  {
        font-size: 16px;
        font-weight: bold;
      }
      hr  {
        height: 1px;
        border: 0;
        color: #ddd;
        background-color: #ddd;
      }
      
      .app-desc {
        clear: both;
        margin-left: 20px;
      }
      .param-name {
        width: 100%;
      }
      .license-info {
        margin-left: 20px;
      }
      
      .license-url {
        margin-left: 20px;
      }
      
      .model {
        margin: 0 0 0px 20px;
      }
      
      .method {
        margin-left: 20px;
      }
      
      .method-notes {
        margin: 10px 0 20px 0;
        font-size: 90%;
        color: #555;
      }
      
      pre {
        padding: 10px;
        margin-bottom: 2px;
      }
      
      .http-method {
       text-transform: uppercase;
      }
      
      pre.get {
        background-color: #0f6ab4;
      }
      
      pre.post {
        background-color: #10a54a;
      }
      
      pre.put {
        background-color: #c5862b;
      }
      
      pre.delete {
        background-color: #a41e22;
      }
      
      .huge {
        color: #fff;
      }
      
      pre.example {
        background-color: #f3f3f3;
        padding: 10px;
        border: 1px solid #ddd;
      }
      
      code {
        white-space: pre;
      }
      
      .nickname {
        font-weight: bold;
      }
      
      .method-path {
        font-size: 1.5em;
        background-color: #0f6ab4;
      }
      
      .up {
        float:right;
      }
      
      .parameter {
        width: 500px;
      }
      
      .param {
        width: 500px;
        padding: 10px 0 0 20px;
        font-weight: bold;
      }
      
      .param-desc {
        width: 700px;
        padding: 0 0 0 20px;
        color: #777;
      }
      
      .param-type {
        font-style: italic;
      }
      
      .param-enum-header {
      width: 700px;
      padding: 0 0 0 60px;
      color: #777;
      font-weight: bold;
      }
      
      .param-enum {
      width: 700px;
      padding: 0 0 0 80px;
      color: #777;
      font-style: italic;
      }
      
      .field-label {
        padding: 0;
        margin: 0;
        clear: both;
      }
      
      .field-items  {
        padding: 0 0 15px 0;
        margin-bottom: 15px;
      }
      
      .return-type {
        clear: both;
        padding-bottom: 10px;
      }
      
      .param-header {
        font-weight: bold;
      }
      
      .method-tags {
        text-align: right;
      }
      
      .method-tag {
        background: none repeat scroll 0% 0% #24A600;
        border-radius: 3px;
        padding: 2px 10px;
        margin: 2px;
        color: #FFF;
        display: inline-block;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
  <h1>Products API</h1>
    <div class="app-desc">Version: 1.0</div>    
  <h2>Access</h2>

  <h2><a name="__Methods">Methods</a></h2>
  [ Jump to <a href="#__Models">Models</a> ]

  <h3>Table of Contents </h3>
  <div class="method-summary"></div>
  <h4><a href="#Default">Default</a></h4>
  <ul>
  <li><a href="#apiHealthGet"><code><span class="http-method">get</span> /api/health</code></a></li>
  <li><a href="#apiProductsA5fc4e475d5d4c7aB2354810f2693448Delete"><code><span class="http-method">delete</span> /api/products/a5fc4e47-5d5d-4c7a-b235-4810f2693448</code></a></li>
  <li><a href="#apiProductsCf4fa9482a7530649f6dC5c2b1e238dbGet"><code><span class="http-method">get</span> /api/products/cf4fa948-2a75-3064-9f6d-c5c2b1e238db</code></a></li>
  <li><a href="#apiProductsGet"><code><span class="http-method">get</span> /api/products</code></a></li>
  <li><a href="#apiProductsPost"><code><span class="http-method">post</span> /api/products</code></a></li>
  <li><a href="#apiProductsPut"><code><span class="http-method">put</span> /api/products</code></a></li>
  </ul>

  <h1><a name="Default">Default</a></h1>
  <div class="method"><a name="apiHealthGet"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/health</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiHealthGet</span>)</div>
    







    <h3 class="field-label">Return type</h3>
    <div class="return-type">
      <a href="#inline_response_200_1">inline_response_200_1</a>
      
    </div>

    <!--Todo: process Response Object and its headers, schema, examples -->

    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: application/json</div>
    <pre class="example"><code>{
  "status" : "status"
}</code></pre>

    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="header">Content-Type</span> response header.
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Auto generated using Swagger Inspector
        <a href="#inline_response_200_1">inline_response_200_1</a>
    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: 0</div>
    <pre class="example"><code>{&quot;status&quot;:&quot;available&quot;}</code></pre>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="apiProductsA5fc4e475d5d4c7aB2354810f2693448Delete"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="delete"><code class="huge"><span class="http-method">delete</span> /api/products/a5fc4e47-5d5d-4c7a-b235-4810f2693448</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiProductsA5fc4e475d5d4c7aB2354810f2693448Delete</span>)</div>
    








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Auto generated using Swagger Inspector
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="apiProductsCf4fa9482a7530649f6dC5c2b1e238dbGet"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/products/cf4fa948-2a75-3064-9f6d-c5c2b1e238db</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiProductsCf4fa9482a7530649f6dC5c2b1e238dbGet</span>)</div>
    







    <h3 class="field-label">Return type</h3>
    <div class="return-type">
      <a href="#inline_response_200">inline_response_200</a>
      
    </div>

    <!--Todo: process Response Object and its headers, schema, examples -->

    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: application/json</div>
    <pre class="example"><code>{
  "product_owner_name" : "product_owner_name",
  "developers" : [ "developers", "developers" ],
  "scrum_master_name" : "scrum_master_name",
  "product_id" : "product_id",
  "product_name" : "product_name",
  "methodology" : "methodology",
  "start_date" : "start_date"
}</code></pre>

    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="header">Content-Type</span> response header.
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Auto generated using Swagger Inspector
        <a href="#inline_response_200">inline_response_200</a>
    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: 0</div>
    <pre class="example"><code>{&quot;product_id&quot;:&quot;cf4fa948-2a75-3064-9f6d-c5c2b1e238db&quot;,&quot;product_name&quot;:&quot;KK&quot;,&quot;product_owner_name&quot;:&quot;kljk&quot;,&quot;developers&quot;:[&quot;Noe Metz&quot;,&quot;Miss Idell Dietrich&quot;,&quot;Ms. Annabelle Klein I&quot;,null,&quot;lkj&quot;],&quot;scrum_master_name&quot;:&quot;lkljl&quot;,&quot;start_date&quot;:&quot;1994-01-07&quot;,&quot;methodology&quot;:&quot;Agile&quot;}</code></pre>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="apiProductsGet"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/products</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiProductsGet</span>)</div>
    








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Auto generated using Swagger Inspector
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="apiProductsPost"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="post"><code class="huge"><span class="http-method">post</span> /api/products</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiProductsPost</span>)</div>
    


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Request body</h3>
    <div class="field-items">
      <div class="param">body <a href="#api_products_body_1">api_products_body_1</a> (optional)</div>
      
            <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash;  </div>
            <div class="param-desc"><span class="param-type">example: <code>{
  &quot;value&quot; : &quot;{\n  \&quot;product_name\&quot;: \&quot;Product Y\&quot;,\n  \&quot;product_owner_name\&quot;: \&quot;Scott Summers\&quot;,\n  \&quot;developers\&quot;: [\n    \&quot;Ororo Munroe\&quot;,\n    \&quot;Kurt Wagner\&quot;\n  ],\n  \&quot;scrum_master_name\&quot;: \&quot;Jean Grey\&quot;,\n  \&quot;start_date\&quot;: \&quot;2000-07-14\&quot;,\n  \&quot;methodology\&quot;: \&quot;Agile\&quot;\n}&quot;
}</code></span></div>    </div>  <!-- field-items -->




    <h3 class="field-label">Return type</h3>
    <div class="return-type">
      <a href="#api_products_body_1">api_products_body_1</a>
      
    </div>

    <!--Todo: process Response Object and its headers, schema, examples -->

    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: application/json</div>
    <pre class="example"><code>{
  "product_owner_name" : "product_owner_name",
  "developers" : [ "developers", "developers" ],
  "scrum_master_name" : "scrum_master_name",
  "product_id" : "product_id",
  "product_name" : "product_name",
  "methodology" : "methodology",
  "start_date" : "start_date"
}</code></pre>

    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="header">Content-Type</span> response header.
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">201</h4>
    Auto generated using Swagger Inspector
        <a href="#api_products_body_1">api_products_body_1</a>
    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: 0</div>
    <pre class="example"><code>{&quot;product_id&quot;:&quot;a5fc4j47-5d5d-4c7a-b235-4810f2693448&quot;,&quot;product_name&quot;:&quot;Product X&quot;,&quot;product_owner_name&quot;:&quot;Scott Summers&quot;,&quot;developers&quot;:[&quot;Ororo Munroe&quot;,&quot;Kurt Wagner&quot;],&quot;scrum_master_name&quot;:&quot;Jean Grey&quot;,&quot;start_date&quot;:&quot;2000-07-14&quot;,&quot;methodology&quot;:&quot;Agile&quot;}</code></pre>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="apiProductsPut"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="put"><code class="huge"><span class="http-method">put</span> /api/products</code></pre></div>
    <div class="method-summary"> (<span class="nickname">apiProductsPut</span>)</div>
    


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Request body</h3>
    <div class="field-items">
      <div class="param">body <a href="#api_products_body">api_products_body</a> (optional)</div>
      
            <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash;  </div>
            <div class="param-desc"><span class="param-type">example: <code>{
  &quot;value&quot; : &quot;{\n  \&quot;product_name\&quot;: \&quot;Product Y\&quot;,\n  \&quot;product_owner_name\&quot;: \&quot;Scott Summers\&quot;,\n  \&quot;developers\&quot;: [\n    \&quot;Ororo Munroe\&quot;,\n    \&quot;Kurt Wagner\&quot;\n  ],\n  \&quot;scrum_master_name\&quot;: \&quot;Jean Grey\&quot;,\n  \&quot;start_date\&quot;: \&quot;2000-07-14\&quot;,\n  \&quot;methodology\&quot;: \&quot;Agile\&quot;\n}&quot;
}</code></span></div>    </div>  <!-- field-items -->





    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">405</h4>
    Auto generated using Swagger Inspector
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>

  <h2><a name="__Models">Models</a></h2>
  [ Jump to <a href="#__Methods">Methods</a> ]

  <h3>Table of Contents</h3>
  <ol>
    <li><a href="#api_products_body"><code>api_products_body</code></a></li>
    <li><a href="#api_products_body_1"><code>api_products_body_1</code></a></li>
    <li><a href="#inline_response_200"><code>inline_response_200</code></a></li>
    <li><a href="#inline_response_200_1"><code>inline_response_200_1</code></a></li>
  </ol>

  <div class="model">
    <h3><a name="api_products_body"><code>api_products_body</code></a> <a class="up" href="#__Models">Up</a></h3>
    
    <div class="field-items">
      <div class="param">product_owner_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">developers (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">array[String]</a></span>  </div>
<div class="param">scrum_master_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_id (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">methodology (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">start_date (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
    </div>  <!-- field-items -->
  </div>
  <div class="model">
    <h3><a name="api_products_body_1"><code>api_products_body_1</code></a> <a class="up" href="#__Models">Up</a></h3>
    
    <div class="field-items">
      <div class="param">product_owner_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">developers (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">array[String]</a></span>  </div>
<div class="param">scrum_master_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_id (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">methodology (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">start_date (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
    </div>  <!-- field-items -->
  </div>
  <div class="model">
    <h3><a name="inline_response_200"><code>inline_response_200</code></a> <a class="up" href="#__Models">Up</a></h3>
    
    <div class="field-items">
      <div class="param">product_owner_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">developers (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">array[String]</a></span>  </div>
<div class="param">scrum_master_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_id (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">product_name (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">methodology (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
<div class="param">start_date (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
    </div>  <!-- field-items -->
  </div>
  <div class="model">
    <h3><a name="inline_response_200_1"><code>inline_response_200_1</code></a> <a class="up" href="#__Models">Up</a></h3>
    
    <div class="field-items">
      <div class="param">status (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
    </div>  <!-- field-items -->
  </div>
  </body>
</html>
