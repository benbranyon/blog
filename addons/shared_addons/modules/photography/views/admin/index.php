<section class="title">
	<h4>Photo Galleries</h4>
</section>

<section class="item">

	<?php echo form_open('admin/photography/delete');?>
	
	<?php if(!empty($photo_galleries)): ?>
		<table border="0" class="table-list">
		</table>
	<?php else:?>
			<div class="no_data">
				<?php echo 'No photo galleries exist'; ?>
			</div>
	<?php endif;?>
</section>
