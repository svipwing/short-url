<h1 align="center">
  短链接系统
</h1>

<p align="center">
  <a href="README.md">中文</a> | <a href="README-EN.md">English</a>
</p>

<p align="center">
  简洁朴素的短链接系统，让长链接秒变短链接！
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PRs-welcome-brightgreen.svg"/>
  <img src="https://img.shields.io/badge/Powered%20by-Woxy%20Team-blue"/>
</p>

<hr/>

<center>
<img src="./cover.png" />
</center>

#### 软件架构

使用 PHP+MySQL，搭配 jQuery、grid.css。

#### 安装教程

0. 环境准备：phpmyadmin 4.9.7 (MySQL)、php72
1. 下载发行版（若长期未更新，请拉取最新仓库的 master 分支作为源码，并删除 `.git` 目录），解压到主机。
2.  按照注释指引填写配置文件 `config.php`，确保信息正确，md5 采用 32 位小写。
3.  访问安装程序 `install/install.php`，当出现 `数据表创建成功！您现在可以开始使用了。`，代表安装结束；若出现错误，请参见`注意事项`第一条。
4.  删除 `install` 目录，避免安全漏洞。
5.  访问 `new.php`，开始使用；如果出现错误，请重新安装。

#### 注意事项
1.  `config.php` 很重要，必须正确填写，并确保完整性。
2.  遵循 GPL-3 许可证。
3.  建议购买较短的域名以达到最好的效果。

#### 参与贡献

1. Fork 本仓库。
2. 新建 Feat_xxx 分支。
3. 提交代码。
4. 新建 Pull Request。