<section class="title">
	<?php if($this->method === 'create'): ?>
		<h4>New Photo Gallery</h4>
	<?php else: ?>
		<h4>Manage Gallery</h4>
	<?php endif; ?>
</section>

<section class="item">
	<div class="content">
	<?php echo form_open($this->uri->uri_string(), 'class="crud"');?>
		<div class="form_inputs">
			<ul>
				<li class="<?php echo alternator('', 'even'); ?>">
					<label for="title"><?php echo 'Title'; ?><span>*</span></label>
					<div class="input"><?php echo form_input('title', null, 'maxlength="100" id="title"');?></div>
				</li>

				<li class="<?php echo alternator('', 'even'); ?>">
					<label for="slug"><?php echo 'Slug'; ?><span>*</span></label>
					<div class="input"><?php echo form_input('slug', null, 'class="width-15"');?></div>
				</li>

				<li class="<?php echo alternator('', 'even'); ?>">
					<label for="description"><?php echo 'Description';?><span>*</span></label>
					<br style="clear:both;" />
					<?php echo form_textarea(array('id'=>'description', 'name'=>'description', 'rows'=>10,'class'=>'wysiwyg-simple'));?>
				</li>
			</ul>
		</div>

		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel')));?>
		</div>
	<?php echo form_close(); ?>
	</div>
</section>
