# PHPとApacheのベースイメージ
FROM php:8.1-apache

# Composerのインストールに必要な依存関係をインストール
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    && rm -rf /var/lib/apt/lists/*

# mysqli 拡張をインストール
RUN docker-php-ext-install mysqli

# Apacheの設定を変更
RUN echo "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>" > /etc/apache2/conf-available/000-default.conf
RUN a2enconf 000-default

# Composerをインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 作業ディレクトリを指定
WORKDIR /var/www/html

# Composerのバージョン確認
RUN composer --version
