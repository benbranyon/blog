<h1>Photography</h1>

<div class="gallery">
	<?php if(! $folders):?>
		<h3>There are no photos</h3>
	<?php else:?>
		<?php foreach($folders as $folder):?>
			<h3><a href="/photography/view/<?php echo $folder->id;?>"><?php echo $folder->name;?></a></h3>
		<?php endforeach;?>
	<?php endif;?>
</div>
