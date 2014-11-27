<div class="mails form">
<?php echo $this->Form->create('Mail'); ?>
	<fieldset>
		<legend><?php echo __d('tiny_mail', 'Admin Edit Mail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('alias');
		echo $this->Form->input('config');
		echo $this->Form->input('message');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__d('tiny_mail', 'Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __d('tiny_mail', 'Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__d('tiny_mail', 'Delete'), array('action' => 'delete', $this->Form->value('Mail.id')), array(), __d('tiny_mail', 'Are you sure you want to delete # %s?', $this->Form->value('Mail.id'))); ?></li>
		<li><?php echo $this->Html->link(__d('tiny_mail', 'List Mails'), array('action' => 'index')); ?></li>
	</ul>
</div>
