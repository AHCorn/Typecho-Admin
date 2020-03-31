<div class="typecho-head-nav clearfix" role="navigation">
    <nav id="typecho-nav-list">
    <ul class="root">
	<li class="parent"><a href="<?php $this->options->siteUrl(); ?>">概要</a></li>
	</ul>
<ul class="root">
	<li class="parent"><a href="<?php $this->options->siteUrl(); ?>/post.html">文章</a></li>
</ul>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<ul class="root">
<li class="parent"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
</ul>
<?php endwhile; ?>
