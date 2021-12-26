#!/usr/bin/env bash

echo "Installing PHP and setting it up..."
# Install PHP 7.0 and module for Apache2 and MySQL
apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-mysql

# Restart Apache2
systemctl restart apache2