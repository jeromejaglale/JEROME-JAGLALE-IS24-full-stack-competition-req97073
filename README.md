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
sudo docker build -t jeromejaglale/frontend:latest .
sudo docker run -p 8080:8080 -t jeromejaglale/frontend:latest
```
Go to http://localhost:8080.
Any questions? Contact me at jerome.jaglale@gmail.com.
Thank you.
