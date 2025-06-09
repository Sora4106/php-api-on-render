FROM php:8.1-apache

# 安裝 PHP 套件（如有需要）
RUN docker-php-ext-install pdo_mysql

# 將 public 資料夾複製進去網站根目錄
COPY public/ /var/www/html/

# 開啟 Apache
CMD ["apache2-foreground"]
