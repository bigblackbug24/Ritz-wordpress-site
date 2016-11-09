<!--
<form method="get" id="searchform" action="http://localhost:8888/mysite/">
		<label for="s">Search</label>
		<input type="text" value="" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="GO" />
	</form>
-->
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div id="sidebar">
		<h3>Category</h3>
		<ul class="ul-cat">
			<?php wp_list_categories('show_count=1&title_li=');?>
			<!--
			<li><a href="#">Uncategorized</a></li>
			<li><a href="#">News &amp; Update</a></li>
			<li><a href="#">Design</a></li>
			-->
		</ul>
		<h3>Archives</h3>
		<ul class="ul-archives">
		<?php wp_get_archives('type=monthly');?>
		<!--
			<li><a href="#">October 2006</a></li>
			<li><a href="#">September 2006</a></li>
			<li><a href="#">August 2006</a></li>
		-->
		</ul>
	</div>
	<!-- Sidebar -->