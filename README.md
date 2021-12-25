# VagrantSample

本レポジトリは[実践 Vagrant](https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-Vagrant-Mitchell-Hashimoto/dp/4873116651/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ADA8SPDC3ZLU&keywords=vagrant&qid=1640352785&sprefix=vagran%2Caps%2C191&sr=8-1)を参考に、作成したものです。環境依存や学習目的のため各種ツールのバージョンや内容が書籍と異なっています。

## 環境要件
本レポジトリのコードの実行環境は以下です。
- Windows 10
- [VirtualBox 6.1.30](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant 2.2.19](https://www.vagrantup.com/downloads)

※Vagrantのバージョンにより、対応しているVirtualBoxのバージョンも異なるため、他のバージョンを使用する方は注意してください。

※VirtualBoxのバージョンが古い場合、WindowsではHyper-Vを無効化しなければ仮想マシンの起動できないことがあります。Hyper-VはDocker Desktopを利用する際には有効にする必要があるため注意してください。

## 実行方法
### 仮想マシンの起動
レポジトリ内で以下のコマンドを実行すると仮想マシンが起動します。
```
$ vagrant up
```
また、以下のコマンドも参考にしてください。
```
# 仮想マシンを停止する際
$ vagrant halt

# 仮想マシンを消去する際
$ vagrant destroy

# 仮想マシンの起動中にVagrantfileを書き換えた際
# 既存部分にも修正が入る場合はdestroyしてクリーンな環境を作り直した方が安全
$ vagrant reload
```
### ブラウザからの動作確認
ブラウザから
http://localhost:8080/index/
または
http://192.168.33.10/index/
にアクセスしてください。

## 参考文献
- [実践 Vagrant](https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-Vagrant-Mitchell-Hashimoto/dp/4873116651/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ADA8SPDC3ZLU&keywords=vagrant&qid=1640352785&sprefix=vagran%2Caps%2C191&sr=8-1)