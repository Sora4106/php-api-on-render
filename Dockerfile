FROM php:8.1-apache

# 安裝 mysqli 與 pdo_mysql 支援
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 複製網站資料到 Apache 的根目錄
COPY public/ /var/www/html/

# 啟動 Apache
CMD ["apache2-foreground"]
