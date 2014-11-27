<div class="mails view">
<h2><?php echo __d('tiny_mail', 'Mail'); ?></h2>
	<dl>
		<dt><?php echo __d('tiny_mail', 'Id'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'Alias'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'Config'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['config']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'Message'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'User Id'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'Created'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('tiny_mail', 'Updated'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __d('tiny_mail', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('tiny_mail', 'Edit Mail'), array('action' => 'edit', $mail['Mail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__d('tiny_mail', 'Delete Mail'), array('action' => 'delete', $mail['Mail']['id']), array(), __d('tiny_mail', 'Are you sure you want to delete # %s?', $mail['Mail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('tiny_mail', 'List Mails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('tiny_mail', 'New Mail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
