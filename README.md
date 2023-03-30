## Build and Run
### Backend
```
cd backend
sudo docker build -t jeromejaglale/backend:latest .
sudo docker run -p 3000:80 -t jeromejaglale/backend:latest
```

### Frontend
```
cd frontend
npm install
npm build
```
Put the generated `dist` folder at the root of a web server.
