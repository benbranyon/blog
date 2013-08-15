<h2 class="page-header">Photography</h2>

<div class="gallery">
	<?php if(! $folders):?>
		<h3>There are no photos</h3>
	<?php else:?>
		<?php foreach($folders as $folder):?>
			<h3><a href="/photography/view/<?php echo $folder->id;?>"><?php echo $folder->name;?></a></h3>
			{{ files:listing folder="<?php echo $folder->id;?>" limit="1" }}
				<img src="{{ url:site }}files/thumb/{{ id }}/200/150" alt="{{ description }}"/>
			{{ /files:listing }}
		<?php endforeach;?>
	<?php endif;?>
</div>
