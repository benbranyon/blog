<div id = "latsestBlogPost">
	<?php foreach($blog_widget as $post_widget): ?>
		<div>
			<?php echo anchor('blog/'.date('Y/m', $post_widget->created_on) .'/'.$post_widget->slug, $post_widget->title) ?>
			<div class="read-more">
				<?php echo anchor('blog/'.date('Y/m', $post_widget->created_on) . '/' . $post_widget->slug, 'Read More');?>
			</div>
		</div>
	<?php endforeach ?>
</div>
