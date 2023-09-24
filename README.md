# 手順

```
git clone
cd photo-list
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app npm i
docker-compose exec app npm run build
```

```
cp .env.example .env

DB_USERNAME=user
DB_PASSWORD=password
```

access
localhost:8000