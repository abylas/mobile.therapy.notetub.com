<div class="note">
	<div class="title">
	<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
	</div>

	<div class="owner">
		by <strong> <?php echo $data->owner->username ?> </strong>
		<?php echo ' on ' . date('F j, Y',$data->create_time); ?>
	</div>
</div>
