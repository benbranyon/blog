<script>
	$(document).ready(function(){
		$('#gallery-container').sGallery({
			fullScreenEnabled: true
		});
	});
</script>

<div id="gallery-container">
	<ul class="items--small">
		{{ files:listing folder="<?php echo $id;?>" limit="12" }}
			<li class="item"><a href="#"><img src="{{ url:site }}files/large/{{ id }}" alt="{{ description }}" /></a></li>
		{{ /files:listing }}
	</ul>
	<ul class="items--big">
		{{ files:listing folder="<?php echo $id;?>" limit="12" }}
			<li class="item--big"><a href="#"><img src="{{ url:site }}files/large/{{ id }}" alt="{{ description }}" /></a></li>
		{{ /files:listing }}
	</ul>
	<div class="controls">
		<span class="control icon-arrow-left" data-direction="previous"></span>
		<span class="control icon-arrow-right" data-direction="next"></span>
		<span class="gird icon-gird"></span>
		<span class="fs-toggle icon-fullscreen"></span>
	</div>
</div>
