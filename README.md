# (Template) PHP with MySQL (PHPMyAdmin) with Apache server & composer in Docker


<!-- Image -->
<!-- ![](./screenshot.png) -->
[Website](https://google.com)

```
docker-compose up 
```
or
```
docker-compose up -d
```

```
docker-compose down
```

## After making changes in docker-compose.yml or Dockerfile, rebuild and restart your Docker containers:
  
  ``` 
  docker-compose down
  docker-compose up --build -d
  ```
  
  ## コンテナ内で Composer のインストールを確認する方法

  コンテナ内に入る
  起動した PHP/Apache コンテナ（php-apache）にアクセスするため、次のコマンドを実行

  ```
  docker exec -it php-apache bash
  ```

Composer のバージョンを確認する
コンテナ内で以下のコマンドを実行して Composer がインストールされているか確認

  ```
    composer --version
  ```

    コンテナから退出する
  ```
  exit
  ```
    確認が終わったら、exit コマンドでコンテナから退出できます。


## PHP mysqli install 
```
docker exec -it php-apache bash
docker-php-ext-install mysqli
```

## PHPMyAdmin 
user: root
Pass: root_password
    