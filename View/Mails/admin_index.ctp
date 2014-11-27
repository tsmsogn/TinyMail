<div class="mails index">
	<h2><?php echo __d('tiny_mail', 'Mails'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('alias'); ?></th>
			<th><?php echo $this->Paginator->sort('config'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __d('tiny_mail', 'Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mails as $mail): ?>
	<tr>
		<td><?php echo h($mail['Mail']['id']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['alias']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['config']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['message']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['created']); ?>&nbsp;</td>
		<td><?php echo h($mail['Mail']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('tiny_mail', 'View'), array('action' => 'view', $mail['Mail']['id'])); ?>
			<?php echo $this->Html->link(__d('tiny_mail', 'Edit'), array('action' => 'edit', $mail['Mail']['id'])); ?>
			<?php echo $this->Form->postLink(__d('tiny_mail', 'Delete'), array('action' => 'delete', $mail['Mail']['id']), array(), __d('tiny_mail', 'Are you sure you want to delete # %s?', $mail['Mail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __d('tiny_mail', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __d('tiny_mail', 'previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__d('tiny_mail', 'next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __d('tiny_mail', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('tiny_mail', 'New Mail'), array('action' => 'add')); ?></li>
	</ul>
</div>
