# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  config.vm.box = "bento/ubuntu-20.04"

  config.vm.provider "virtualbox" do |v|
    v.linked_clone = true
    v.name = "web"
    v.memory = 1024
    v.cpus = 1
  end

  config.vm.define "web" do |web|
  web.vm.hostname = "webserver"
  web.vm.network "private_network" , ip: "172.28.128.3", bridge: 'en0: Wi-Fi (AirPort)'
  end

  
end
