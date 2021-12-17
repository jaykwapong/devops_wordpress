Vagrant.configure("2") do |config|
  
config.vm.synced_folder ".", "/data"
config.vm.synced_folder ".", "/vagrant"
  config.vm.provider "virtualbox" do |v|
    v.linked_clone = true
    v.memory = 1024
    v.cpus = 1
  end

  config.vm.define "centos" do |centos|
  centos.vm.box = "bento/centos-7"
  centos.vm.hostname = "centos"
  centos.vm.network "private_network", ip: "172.28.128.3"
  centos.vm.provision "ansible_local" do |ansible|
    ansible.playbook = "wpplaybook.yml"
  end
  end

  config.vm.define "ubuntu" do |ubuntu|
    ubuntu.vm.box = "bento/ubuntu-20.04"
    ubuntu.vm.hostname = "ubuntu"
    ubuntu.vm.network "private_network", ip: "172.28.128.4"
    ubuntu.vm.provision "ansible_local" do |ansible|
      ansible.playbook = "wpplaybook.yml"
    end
    end


  
end