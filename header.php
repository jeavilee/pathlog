<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!--[if lt IE 9]>
<script src="http://x.libdd.com/farm1/1484d5/69431f1e/93D6C.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<script type="text/javascript" src="http://t.libdd.com/js/libs/jquery/1.7.2/jquery.js"></script>
<script src="http://x.libdd.com/farm1/a571d2/fba453c2/base.js"></script>
<?php $this->header("generator=&template=&"); ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://x.libdd.com/farm1/2893f5/e02c9018/jquery.backstretch.min.js"></script>
<script type="text/javascript"> 
$.backstretch("http://x.libdd.com/farm1/a571d2/7153de0e/japan.jpg", {speed: 150});
//背景图『大阪-夜色』: http://53hao.lofter.com/post/2711_37210c
</script>
</head>
<body>
<div class="clear_bg"></div>
<div class="body-inner">
		<div id="header">
		<header id="blog_title">
			<img src="http://x.libdd.com/farm1/a571d2/f712047a/logo.png">
			<?php if ($this->is('index')): ?><h1><a href="<?php $this->options->siteUrl(); ?>">Cho's blog</a></h1>
			<?php else: ?>
			<div class="h1"><a href="<?php $this->options->siteUrl(); ?>">Cho's blog</a></div>
			<?php endif; ?>
			<span class="des">PAGE&amp;ECHO</span>
        </header>
			<nav id="menu">
			<ul class="header-nav">
				<li <?php if($this->is('index')): ?> class="current"<?php endif; ?><?php if ($this->is('post')): ?>class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">博客</a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
				<?php endwhile; ?>
				<li><a rel="nofollow" href="<?php $this->options->siteUrl(); ?>feed" target="_blank">订阅</a></li>
			</ul>
		</nav>
			 <form action="/search" class="head-search" method="get">
				<input id="search-input" type="text" name="s" class="inputbox" value="搜索..." onfocus="if (value =='搜索...'){value =''}" onblur="if (value ==''){value='搜索...'}" x-webkit-speech lang="zh-CN" />
			</form>
		<div class="clear"></div>
    </div>
<div id="wrap">