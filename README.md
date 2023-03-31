## Build and Run
### Backend
```
cd backend
sudo docker build -t jeromejaglale/backend:latest .
sudo docker run -p 3000:80 -t jeromejaglale/backend:latest
```

### Frontend
In another terminal:
```
cd frontend
sudo docker build -t jeromejaglale/frontend:latest .
sudo docker run -p 8080:8080 -t jeromejaglale/frontend:latest
```
Go to http://localhost:8080.

Any questions? Contact me at jerome.jaglale@gmail.com.
Thank you.

## Backend details
Software stack: Apache, PHP (Laravel), SQLite
### Entry points
- `GET http://localhost:3000/api/products` -> list of products
- `GET http://localhost:3000/api/products/:productId`-> product details
- `POST http://localhost:3000/api/products`-> product creation. JSON example:
```
{
  "product_id": "a5fc4e47-5d5d-4c7a-b235-4810f2693448",
  "product_name": "Product X",
  "product_owner_name": "Scott Summers",
  "developers": [
    "Ororo Munroe",
    "Kurt Wagner"
  ],
  "scrum_master_name": "Jean Grey",
  "start_date": "2000-07-14",
  "methodology": "Agile"
}
```
- `PUT http://localhost:3000/api/products/:productId`-> update existing product. JSON example:
```
{
  "product_name": "Product Y",
  "product_owner_name": "Scott Summers",
  "developers": [
    "Ororo Munroe",
    "Kurt Wagner"
  ],
  "scrum_master_name": "Jean Grey",
  "start_date": "2000-07-14",
  "methodology": "Agile"
}
```
- `DELETE http://localhost:3000/api/products/:productId`-> delete existing product.

### Source code
- entry points: `routes/api.php`
- model class: `app/Models/Product.php`
- product generator: database/factories/ProductFactory.php
- the product generator is used when seeding the database, in `database/seeders/DatabaseSeeder.php`

## Frontend details
Software stack: Vue.js

### Source code
- main code: `src/App.vue`
- components: `src/components`
