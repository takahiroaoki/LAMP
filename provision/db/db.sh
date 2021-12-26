# Environmental variable for not being asked to set root password
export DEBIAN_FRONTEND=noninteractive

# Install mysql v5.7
apt-get update
apt-get install -y mysql-server=5.7.33-0ubuntu0.16.04.1

# Set up mysql
sed -i -e "s/127.0.0.1/0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf
systemctl restart mysql
mysql -u root < /vagrant/provision/db/db_init.sql