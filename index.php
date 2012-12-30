<?php
/**
 *  pathlog 模仿path.com的轻博客化的typecho主题。
 * 
 * @package pathlog
 * @author cho
 * @version 1.0.0
 * @link http://pagecho.com
 */
 
 $this->need('header.php');
 ?>
 <div id="timeline" class="vertical"></div>
<section id="content">
	<?php while($this->next()): ?>
		<div class="post_item">
		<article class="post">
			<header>
				<h2><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
			</header>
			<div class="con">
				<?php $this->content('[继续阅读]'); ?>
			</div>
		</article>
		<div class="post_bottom">
				<time><?php $this->date('F d, Y'); ?></time> | <a rel="nofollow" href="<?php $this->permalink() ?>#response" title="添加新评论"><?php $this->commentsNum('暂无评论', '1个评论', '%d个评论'); ?></a>
				<span class="premalink">
					<a rel="nofollow" href="<?php $this->permalink() ?>" title="阅读全文「<?php $this->title() ?>」"><?php $this->permalink() ?></a>
				</span>
		</div>
		<div class="post_arrow"></div>
		</div>
		<?php endwhile; ?>	
		<div class="nav">
			<?php $this->pageNav();?>
		</div>
</section>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>