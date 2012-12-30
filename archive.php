<?php $this->need('header.php'); ?>
 <div id="timeline" class="vertical"></div>
	<section id="content" class="archive-page">
		<?php if ($this->have()): ?>
		<div class="archivetitle">正在查看有关“<?php $this->archiveTitle('-', '', ''); ?>”的文章</div>
        <?php while($this->next()): ?>
		<div class="post_item">
		<article class="post">
			<header>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
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
		<?php else: ?>
			 <header><h2 class="archivetitle">没有找到“<?php $this->archiveTitle('-', '', ''); ?>”下的内容...</h2></header>
			 <div class="post_item">
				<div class="post">
					<h2>尝试其他时间的归档吧</h2>
					<div class="con">
					</div>
				</div>
				<div class="post_bottom">
				</div>
				<div class="post_arrow"></div>
			</div>
		<?php endif; ?>
		<?php $this->pageNav();?>
	</section>
	<div class="clear"></div>
<?php $this->need('footer.php'); ?>

