# 概要
坂道アイドルの生写真を管理・トレードできるアプリケーション

# 機能実装進捗
- [ ] topページ
- [ ] 欲しいものリスト
  - [x] 表示
  - [ ] 登録
  - [ ] 編集
  - [ ] 削除
- [ ] 所持リスト
  - [x] 表示
  - [ ] 登録
  - [ ] 編集
  - [ ] 削除
- [ ] ログイン機能
- [ ] シェア機能
- [ ] フレンド機能
- [ ] トレード機能
- [ ] 管理画面

https://github.com/k-ichikawa/photo-list/assets/10583700/baca2805-7f07-4093-8cd9-d5f969617ae3

# 環境構築手順

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
