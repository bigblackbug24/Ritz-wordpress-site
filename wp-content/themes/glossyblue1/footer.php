<div id="footer">
		<div class="left-col">
			<h4>Recent Posts </h4>
			<?php query_posts('showposts=5'); ?>
			<ul class="recent-posts">
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<strong>
						<a href="<?php the_permalink() ?>" rel="bookmark" title=""></a>
					</strong>
						<small><?php the_time('m-d-Y') ?></small>
				</li>
				<!--
				<li><a href="#">Blog Title Text</a><br />
					10/23/2006</li>
				<li><a href="#">Blog Title</a><br />
					10/23/2006</li>
				<li><a href="#">Title Text</a><br />
					10/23/2006</li>
				<li><a href="#">Sample Blog Title</a><br />
					10/23/2006</li>
				-->
			<?php endwhile; ?>
			</ul>
		</div>
		<div class="left-col">
			<h4>Recently Commented</h4>
			<ul class="recent-comments">
				<li><a href="#">Nick:</a> This is a test comment</li>
				<li><a href="#">Jen:</a> Hello, nice day!</li>
				<li><a href="#">Someone:</a> Wow, this is another test comment</li>
				<li><a href="#">Admin:</a> This is a comment</li>
			</ul>
		</div>
		<div class="right-col">
			<h4>About</h4>
			<p>Welcome to my design blog and portfolio showcase. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
			<p>Feel free to <a href="#"> contact me.</a></p>
		</div>
		<hr class="clear" />
	</div>
	</div>
<!--/page -->
<div id="credits"><span class="left">Powered by <a href="http://www.wordpress.org">WordPress</a> | Theme by <a href="http://www.ndesign-studio.com">N.Design Studio</a></span> <span class="right"><a href="#" class="rss">Entries RSS</a> <a href="#" class="rss">Comments RSS</a></span></div>
</body>
</html>
