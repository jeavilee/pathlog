<footer id="footer"> 
		<div class="copy">Copyright &copy;  2010-2013 <?php $this->options->title() ?> / Theme by <a href="http://pagecho.com">cho</a>
			<span class="back2top">
				<a rel="nofollow" href="<?php $this->options->siteUrl(); ?>feed" target="_blank">Rss</a> / 
				<a href="<?php $this->options->siteUrl(); ?>about">About</a> / 
				<a rel="nofollow" href="javascript:void(0);" onclick="MGJS.goTop();return false;">Top</a>
			</span>
		</div>
</footer>
</div>
</div>
		
<script type="text/javascript" src="http://x.libdd.com/farm1/775895/a06e3ed2/F61B5.js"></script>
<script type="text/javascript"> 
jQuery('.con a:has(img)').lightBox();
</script> 
<?php if ($this->is('index')): ?>
<?php else: ?>
<script type="text/javascript">  
    if (top.location !== self.location) {  
      top.location = self.location;  
    }  
</script>  
<?php endif; ?>
<?php $this->footer(); ?>
	</body>
</html>