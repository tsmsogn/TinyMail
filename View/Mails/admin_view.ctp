<div class="mails view">
<h2><?php echo __('Mail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Config'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['config']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($mail['Mail']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mail'), array('action' => 'edit', $mail['Mail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mail'), array('action' => 'delete', $mail['Mail']['id']), array(), __('Are you sure you want to delete # %s?', $mail['Mail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
