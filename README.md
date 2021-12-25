# LAMP

This project is for a simple web application with a "LAMP (Linux, Apache, MySQL, PHP)" environment composed by Vagrant.

## Requirement
These code of this repository is executed in the following environment.
- Windows 10
- [VirtualBox 6.1.30](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant 2.2.19](https://www.vagrantup.com/downloads)

※If you want to other versions of these tools, be careful not to take wrong combinations of Vagrant and VirtualBox. A certain version of Vagrant can only handle certain versions of VirtualBox.

※If the version of VirtualBox is somewhat old, we could not boot virtual machines unless we invalidate Hyper-V of Windows. Be careful not to invalidate Hyper-V without thinking because Hyper-V should be valid when you use Docker Desktop.

The LAMP environment is bellow.
- Ubuntu v16.04 LTS
- Apache2 v2.4.18
- MySQL v5.7.33
- PHP

## How to use

Execute the following command inside this project to boot virtual machines. The behavior would be stable with the VirtualBox up.

```
$ vagrant up
```

Then, get access to
http://localhost:8080/index/
or
http://192.168.33.10/index/
from a browser that you like.

## Appendix
Refer to the following commands if you need it. The "\<virtual machine name\>" is an option.
```
# Boot virtual machines
$ vagrant up <virtual machine name>

# Stop virtual machines
$ vagrant halt <virtual machine name>

# Delete virtual machines
$ vagrant destroy <virtual machine name>

# Reload virtual machines when you rewrite setting files
# It would be better to destroy them and up them again, especially when the existing settings were changed.
$ vagrant reload <virtual machine name>

# Get a ssh connection to a virtual machine
$ vagrant ssh <virtual machine name>
```

## Reference
- [実践 Vagrant](https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-Vagrant-Mitchell-Hashimoto/dp/4873116651/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ADA8SPDC3ZLU&keywords=vagrant&qid=1640352785&sprefix=vagran%2Caps%2C191&sr=8-1)
