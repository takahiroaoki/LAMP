# VagrantSample

本レポジトリは[実践Vagrant](https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-Vagrant-Mitchell-Hashimoto/dp/4873116651/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ADA8SPDC3ZLU&keywords=vagrant&qid=1640352785&sprefix=vagran%2Caps%2C191&sr=8-1)を参考に、作成したものです。学習目的のため各種ツールのバージョンや内容が書籍と異なっていることがあります。

## 利用時の注意事項
本レポジトリのコードの実行環境は以下です。
- Windows 10
- [VirtualBox 6.1.30](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant 2.2.19](https://www.vagrantup.com/downloads)

レポジトリ内で以下のコマンドを実行すると仮想環境が起動します。
```
$ vagrant up
```
また、以下のコマンドも参考にしてください。
```
# 仮想環境の起動中にVagrantfileを書き換えた際
$ vagrant reload

# 仮想環境を停止する際
$ vagrant halt

# 仮想環境を消去する際
$ vagrant destroy
```


## 参考文献
- [実践Vagrant](https://www.amazon.co.jp/%E5%AE%9F%E8%B7%B5-Vagrant-Mitchell-Hashimoto/dp/4873116651/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ADA8SPDC3ZLU&keywords=vagrant&qid=1640352785&sprefix=vagran%2Caps%2C191&sr=8-1)