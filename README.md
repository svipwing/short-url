# 短链接系统

#### 介绍
长链接看起来不舒服? 客户体验不好? 本系统助你轻松解决，只需一点，长链接秒变短链接！

#### 软件架构
使用php+mysql架构，采用jquery框架。


#### 安装教程
1.  下载本仓库的发行版
2.  将发行版的zip文件解压至 服务器 或 虚拟主机。
3.  仔细填写配置文件`config.php`（里面有详细注释，请严格按照要求填写），确保信息正确，否则程序无法运行。（md5值采用 32位小写）
4.  访问安装程序`install/install.php`，当出现`数据表创建成功！您现在可以开始使用了。`时，意味着安装结束。若出现错误，请参见`注意事项`第一条。
5.  删除`install`目录（包括`install`目录下的所有文件），避免安全问题。但请注意，必须保留其他文件，尤其是`config.php`。
6.  访问`new.php`，然后开始使用！如果出现错误，请尝试从第一步开始重新安装。

#### 使用说明
1.  `new.php`是添加短链接的页面，一般将此页面提供给客户。`add.php`是api接口，请勿分享。
2.  `config.php`是重要配置文件，请勿删除，务必完整保留，且正确填写信息。
3.  由于开发时间短，人力资源少，目前界面较为简陋，我们将会尽快优化，请谅解！谢谢！

#### 参与贡献
1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request


#### 注意事项
1.  `config.php`很重要！很重要！很重要！程序完全依赖于它，必须正确填写，并确保完整性。
2.  使用时，请保留版权标识和仓库地址，谢谢！
3.  本项目可商用，但请遵循 注意事项 第二条。
4.  短链接本质上依赖于您的域名，建议购买长度较短的域名以达到最好的效果。
