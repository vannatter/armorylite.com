

<div class="admin_home">

	<h4>Add Blog Post</h4>

		<?= $form->create('Blog', array('url' => '/admin')); ?>
	
		<div class="row">
			<div class="lbl"><?= __('Body'); ?>:</div>
			<div class="val"><?= $form->textarea('Blog_Body', array('rows'=>6, 'label'=>false, 'div'=>false, 'style'=>'width: 500px;')); ?></div>
		</div>
	
		<div class="row">
			<div class="lbl">&nbsp;</div>
			<div class="val"><?= $form->submit(__('Add', true), array('label'=>false, 'class'=>'btn', 'div'=>false, 'id'=>'submit_btn')); ?></div>
		</div>
	
		<?= $form->end(); ?>
	
</div>