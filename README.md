## Build and Run
### Backend
```
cd backend
sudo docker build -t jeromejaglale/backend:latest .
sudo docker run -p 3000:80 -t jeromejaglale/backend:latest
```

### Frontend
Required: node v17.9.1 or later
```
cd frontend
npm install
npm run build
```
Put the generated `dist` folder at the root of a web server.
