VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # Download box of Ubuntu 16.04 LTS (Xenial Xerus)
  config.vm.box = "ubuntu/xenial64"
  config.vm.box_download_insecure = true

  # Virtual machine for web server
  config.vm.define "web" do |web|
    # Network setting
    ## Forward port 80 of guest to port 8080 of host
    web.vm.network "forwarded_port", guest: 80, host: 8080
    ## Static private IP address where only host can make access
    web.vm.network "private_network", ip: "192.168.33.10"

    # Shell script for provisioning
    ## Install web server
    web.vm.provision "shell", path: "./provision/web/web.sh"
    ## Install PHP
    web.vm.provision "shell", path: "./provision/web/php.sh"
    ## Install mysql-client
    web.vm.provision "shell", inline: "apt-get install -y mysql-client-5.7"
  end

  # Virtual machine for DB server
  config.vm.define "db" do |db|
    # Network setting
    db.vm.network "private_network", ip: "192.168.33.11"
    
    # Shell script for provisioning
    ## Install DB server
    db.vm.provision "shell", path: "./provision/db/db.sh"
  end
end