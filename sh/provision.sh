#!/usr/bin/env bash

echo "Installing Apache and setting it up..."
# apache2のインストール
apt-get update > /dev/null 2>&1
apt-get install -y apache2 > /dev/null 2>&1

# /var/www/htmlを/vagrant/frontendSrc/index.htmlへのシンポリックリンクに変更
rm -rf /var/www
mkdir /var/www
mkdir /var/www/html
ln -fs /vagrant/frontendSrc/index /var/www/html