<!--删掉多余的内容 -->
<div class="typecho-head-nav clearfix" role="navigation">
<nav id="typecho-nav-list">
<ul class="root">
<li class="parent"><a href="<?php $this->options->siteUrl(); ?>">概要</a></li>
<!-- 概要改成返回首页 也可以直接改成首页这些hhh -->
</ul>
<ul class="root">
<li class="parent"><a href="<?php $this->options->siteUrl(); ?>/post.html">文章</a></li>
<!-- 这里后续做一个独立页面 用来显示全部文章，一样的道理，直接扒后台的就行 -->
</ul>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<ul class="root">
<li class="parent"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
</ul>
<?php endwhile; ?> <!-- 输出自定义页面 -->
<!-- 把下面的用户删掉 有需要可以加点别的 或者弄个登录用户判断 我看到feed大佬那里是搞了个游客 -->
