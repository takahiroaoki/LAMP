Vagrant.configure("2") do |config|
  # boxをダウンロード
  config.vm.box = "ubuntu/xenial64"
  config.vm.box_download_insecure = true

  # ネットワーク設定（複数種類用意）
  ## ゲストのポート80をホストのポート8080にフォワード
  config.vm.network "forwarded_port", guest: 80, host: 8080
  ## ホストのみアクセスできる静的プライベートIPアドレス
  config.vm.network "private_network", ip: "192.168.33.10"

  # プロビジョニングを行うシェルスクリプトを実行
  config.vm.provision "shell", path: "./sh/provision.sh"
end