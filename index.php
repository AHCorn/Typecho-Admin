<?php
/**
 * 基于Typecho后台写的一款主题。
 * 
 * @package Admin
 * @author 安和
 * @version 1.0
 * @link http://lolicorn.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('header.php');
?>
</div>
</div>
<div class="main">
<div class="container typecho-dashboard">
<div class="typecho-page-title">
<h2>网站概要</h2>
</div>
<div class="row typecho-page-main">
<div class="col-mb-12 welcome-board" role="main">
  <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
               <p>目前有 <em><?php $stat->publishedPostsNum() ?></em> 篇文章, 并有 <em><?php $stat->publishedCommentsNum() ?></em> 条评论在 <em><?php $stat->categoriesNum() ?></em> 个分类中. </p>
               

</div>
            <div class="col-mb-12 col-tb-4" role="complementary">
                <section class="latest-link">
                    <h3><?php _e('最近发布的文章'); ?></h3>
                    <?php Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=10')->to($posts); ?>
                    <ul>
                    <?php if($posts->have()): ?>
                    <?php while($posts->next()): ?>
                        <li>
                            <span><?php $posts->date('n.j'); ?></span>
                            <a href="<?php $posts->permalink(); ?>" class="title"><?php $posts->title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <li><em><?php _e('暂时没有文章'); ?></em></li>
                    <?php endif; ?>
                    </ul>
                </section>
            </div>
 <div class="col-mb-12 col-tb-4" role="complementary">
                <section class="latest-link">
                    <h3><?php _e('最近得到的回复'); ?></h3>
                    <ul>
                        <?php Typecho_Widget::widget('Widget_Comments_Recent', 'pageSize=10')->to($comments); ?>
                        <?php if($comments->have()): ?>
                        <?php while($comments->next()): ?>
                        <li>
                            <span><?php $comments->date('n.j'); ?></span>
                            <a href="<?php $comments->permalink(); ?>" class="title"><?php $comments->author(true); ?></a>:
                            <?php $comments->excerpt(35, '...'); ?>
                        </li>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <li><?php _e('暂时没有回复'); ?></li>
                        <?php endif; ?>
                    </ul>
                </section>
            </div>
 <div class="col-mb-12 col-tb-4" role="complementary">
                <section class="latest-link">
                  <u1>
<h3>友情链接</h3>
<div id="typecho-message">
<ul><li><?php Links_Plugin::output("SHOW_TEXT", 10); ?></li></ul>
</div>
                  </u1>
</section>
</div>
</div>
</div>
<div class="typecho-foot" role="contentinfo">
<div class="copyright">
<a href="http://typecho.org/" class="i-logo-s" target="_blank">Typecho</a>
<p>由 <a href="http://typecho.org/" target="_blank">Typecho</a> 强力驱动</p>
<p>Theme By <a href="https://lolicorn.com/" target="_blank">安和</a></p>
</div>
</div>
<?php $this->need('footer.php');?>
