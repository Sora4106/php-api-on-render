#!/bin/bash
apt-get update
apt-get install -y php apache2 libapache2-mod-php
cp -r public/* /var/www/html
