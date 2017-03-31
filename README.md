## Pinghsu Theme

![](https://ws1.sinaimg.cn/large/7c98397dgy1fdydr3jw0yj20rs0fntaz.jpg)

**主题介绍**

Pinghsu是一款以前端性能优化为出发点而制作的Typecho主题，同时又兼顾设计美学和视觉传达。主题命名取自作者姓名和其女朋友姓名的最后一个字的港式英文，挣扎于Hsuping还是Pinghsu，最后取为Pinghsu，意为一切都是Ping先Hsu后，即系要听女朋友的话。

**下载地址**

https://github.com/chakhsu/pinghsu

**主题预览**

https://www.linpx.com

## 主题亮点

 - 页面预加载与DNS预解析保证极快访问速度
 - 无JQuery，无前端框架，轻量级
 - 几乎零代码冗余，几乎每句代码都是有意义的
 - HighlightJS代码高亮，支持22种编程代码
 - 响应式设计，支持平板与手机，访问体验甚至优于桌面
 - 支持图片CDN镜像，支持多种文章缩略图设置
 - 支持首页三栏和单栏选择，文章题图和色块
 - 支持文章目录、相关文章与数学公式渲染
 - 支持文章个性化标徽设置，10种标徽选择
 - 支持个人社交按钮，社交分享
 - 主题设置添加XSS检测，评论提交防止触发多次
 - 还有更多亮点等你去发现~

## 更多预览

|首页 - 三栏|首页 - 单栏|
|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyeg1l1gsj211w0udnjj.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyegxxy5sj211w0ud7j2.jpg)|

|文章内容页 - 题图|文章内容页 - 目录|
|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyejnfc0fj211w0ud14o.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyekevycsj211w0ud44f.jpg)|

|页面内容页|内容页 - 评论|
|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyerb4zyjj211w0udn0p.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyern8mfjj211w0ud772.jpg)|

|分类页|模板归档页|
|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyes1yb7fj211w0udwhp.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyesdiqxjj211w0ud0vw.jpg)|

|搜索页|404|
|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fe0flbno1bj223s1oq15m.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fe0flvltizj223s1oq79a.jpg)|


|移动端 - 首页|移动端 - 文章页|移动端 - 分类页|
|:------|:------|:------|
|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyesvc4wij20af0ijagh.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyetejn5sj20af0ijta2.jpg)|![](https://ws1.sinaimg.cn/large/7c98397dgy1fdyetxmwe1j20af0ijdgj.jpg)|

## 主题使用

**注意事项**：目前主题仅在 typecho 开发版，PHP7.0 下测试通过，其他情况未作太多测试

到 Github 下载，点击"Download ZIP"下载，解压后将文件夹改名为`pinghsu`后上传到 `/usr/themes`，并启用主题。

如果需要更新主题，则先下载最新文件，然后覆盖原文件即可完成更新，部分新增加的功能需要到后台开启才会生效

## 外观设置

外观设置主要分为四部分，分别为 logo、icon 的设置，功能开关，社交按钮设置，图片CDN镜像

使用注意事项都在设置里写得比较清楚了，如果遇到不明白的地方，可以给我留言反馈

下面有几点补充

 - CDN设置部分仅仅测试了七牛的，理论上也支持有镜像服务的CDN
 - 创建模板归档页，无论选择了哪个模板都要加上自定义字段`archive`

**独立搜索页**

设置方法看这里：[Here](https://www.linpx.com/p/add-a-separate-search-page-to-the-pinghsu-theme.html)

**文章缩略图**

文章设置缩略图方法有四种，自定义字段`thumb`，文章附件第一张图片，文章内图片，默认缩略图

优先级顺序 ：自定义字段 thumb -> 附件第一张图片 -> 文章图片 -> 默认缩略图 -> 随机图片 -> 无

缩略图尺寸大小，高度至少有250px，宽度大于高度，推荐高度为400px的

**个性化标徽**

个性化标徽出现的地方有首页、分类页，标签页，作者页和相关文章

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`book` 、 `game` 、 `note` 、 `chat` 、 `code` 、 `image` 、 `web` 、 `link` 、 `design` 、 `lock`

**个性化色块**

个性化色块需要到外观设置那开启才能激活使用，色块出现的地方有首页，分类页，标签页，独立搜索页等等

设置方法是在文章编辑内填写自定义字段，支持的字段如下

`blue`、`purple`、`green`、`yellow`、`red`

**友情链接**

如果你想获取跟我一样的友情链接页面，因为是 typecho 开发版，支持在页面内写`<ul><li>`

所以你可以直接在`<ul>`内联一个`class="flinks"`,然后在`<li>`插入你的友链，即可

更多设置教程 : [Here](https://www.linpx.com/p/more-detailed-pinghsu-theme-set-tutorial.html)

## 浏览器兼容情况

这个····现代浏览器都兼容····

## Contributing 贡献

All kinds of contributions (enhancements, new features, documentation & code improvements, issues & bugs reporting) are welcome.

欢迎各种形式的贡献，包括但不限于优化，添加功能，文档 & 代码的改进，问题和 bugs 的报告。

## License 许可证

Open sourced under the MIT license.

根据 MIT 许可证开源。
