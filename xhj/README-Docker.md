# Metacrypto Site Docker

## Build và chạy

### Build image
```bash
docker build -t metacrypto-site .
```

### Chạy container
```bash
# Chạy với port mapping
docker run -d -p 8080:80 --name metacrypto metacrypto-site

# Hoặc chạy với volume mount (để persist data)
docker run -d -p 8080:80 -v $(pwd)/Upload:/var/www/html/Upload -v $(pwd)/Runtime:/var/www/html/Runtime --name metacrypto metacrypto-site
```

### Truy cập
- Website: http://localhost:8080
- Admin: http://localhost:8080/admin

## Database

### Kết nối database
Container này chỉ chứa web application. Bạn cần:
1. Chạy MySQL container riêng
2. Hoặc kết nối đến database external

### Với MySQL container
```bash
# Chạy MySQL container
docker run -d --name mysql-db -e MYSQL_ROOT_PASSWORD=password -e MYSQL_DATABASE=jys1 mysql:5.6

# Chạy web container với link đến MySQL
docker run -d -p 8080:80 --link mysql-db:mysql --name metacrypto metacrypto-site
```

## Deploy lên VPS

### Build và push
```bash
# Tag image
docker tag metacrypto-site your-registry/metacrypto-site:latest

# Push lên registry
docker push your-registry/metacrypto-site:latest
```

### Pull và chạy trên VPS
```bash
# Pull image
docker pull your-registry/metacrypto-site:latest

# Chạy container
docker run -d -p 80:80 --name metacrypto metacrypto-site:latest
```

## Cấu hình

### Environment variables
```bash
# Chạy với env vars
docker run -d -p 8080:80 -e DB_HOST=mysql -e DB_NAME=jys1 -e DB_USER=root -e DB_PASSWORD=password --name metacrypto metacrypto-site
```

### Volume mounts
```bash
# Mount uploads và runtime
docker run -d -p 8080:80 \
  -v $(pwd)/Upload:/var/www/html/Upload \
  -v $(pwd)/Runtime:/var/www/html/Runtime \
  --name metacrypto metacrypto-site
```
