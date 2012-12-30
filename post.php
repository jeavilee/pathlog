<?php $this->need('header.php'); ?>
<div id="timeline" class="horizontal"></div>
<section id="content" class="post_content">
	<div class="post_item">
	<div class="post">
		<article>
		<header>
			<h1><?php $this->title() ?></h1>
		</header>
		<div class="con">
			<?php $this->content(''); ?>
		</div>
		</article>
		<div class="post_comment">
		<?php $this->need('comments.php'); ?>
		</div>
	</div>
	
	<div class="post_bottom">
			<time><?php $this->date('F d, Y'); ?></time> | <?php $this->commentsNum('暂无评论', '1个评论', '%d个评论'); ?>
			<span class="premalink">
				<?php $this->permalink() ?>
			</span>
	</div>
	</div>
	<div class="post_pre_n_nex">
	<div class="post_arrow"></div>
		<ul>
		<?php $this->theNext('<li class="post_pre">&laquo; %s</li>', '<span class="post_pre_n_nex_null"></span>'); ?>
		<?php $this->thePrev('<li class="post_nex">%s &raquo;</li>', '<span class="post_pre_n_nex_null post_pre_n_nex_nex_null"></span>'); ?>
		</ul>
	</div>
</section>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>