<div class="row">
<div class="col-sm-3">
<div class="dishCategories form">
<?php echo $this->Form->create('DishCategory',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Dish Category'); ?></legend>
	<?php
		echo $this->Form->input('name',array('required' => true));
                echo $this->Form->input('image',array('type'=>'file','required' => true));
		//echo $this->Form->input('status');
		echo $this->Form->input('res_id', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<div class="col-sm-3">
<div class="actions action_menu">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dish Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
