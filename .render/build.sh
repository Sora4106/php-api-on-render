#!/bin/bash

apt-get update

# 安裝 Apache、PHP 及 mysqli 模組
apt-get install -y apache2 php libapache2-mod-php php-mysqli

# 將 public 裡的檔案複製到 Apache 的網頁根目錄
cp -r public/* /var/www/html
