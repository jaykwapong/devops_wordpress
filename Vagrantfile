Vagrant.configure("2") do |config|
  
config.vm.synced_folder ".", "/data"
config.vm.box = "bento/centos-7"
config.vm.synced_folder ".", "/vagrant"
  config.vm.provider "virtualbox" do |v|
    v.linked_clone = true
    v.memory = 1024
    v.cpus = 1
  end

<<<<<<< Updated upstream
  config.vm.define "nginx" do |nginx|
  nginx.vm.hostname = "nginx"
  nginx.vm.network "private_network", ip: "172.28.128.3"
  nginx.vm.provision "ansible_local" do |ansible|
    ansible.playbook = "nginxplaybook.yml"
  end
  end


=======


  config.vm.define "wordpress" do |wordpress|
  wordpress.vm.hostname = "wordpress"
  wordpress.vm.network "private_network", ip: "172.28.128.3"
  wordpress.vm.provision "ansible_local" do |ansible|
    ansible.playbook = "wordpressplaybook.yml"
  end
  end
>>>>>>> Stashed changes
  
end