<div class="loginbox">

	<div class="logintag">
		This is a restricted area for Armory Lite administrators only. Unauthorized access is strictly prohibited.
	</div>

	<div class="loginfrm">
		<?= $form->create('Login', array('url' => '/admin/login')); ?>
		<?= $form->hidden('redirect_to', array('value'=>'/admin')); ?>
	
		<div class="row">
			<div class="lbl"><?= __('Username'); ?>:</div>
			<div class="val"><?= $form->input('username', array('label'=>false, 'div'=>false, 'maxLength'=>50)); ?></div>
		</div>
	
		<div class="row">
			<div class="lbl"><?= __('Password'); ?>:</div> 
			<div class="val"><?= $form->password('password', array('label'=>false, 'div'=>false, 'maxLength'=>50)); ?></div>
		</div>
	
		<div class="row">
			<div class="lbl">&nbsp;</div>
			<div class="val"><?= $form->submit(__('Login', true), array('label'=>false, 'class'=>'btn', 'div'=>false, 'id'=>'submit_btn')); ?></div>
		</div>
	
		<?= $form->end(); ?>
	</div>
	
</div>