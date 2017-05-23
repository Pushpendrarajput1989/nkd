<section class="content-header">
  <h1>
    <?php echo __('Appointments');?>
    <small>List of appointments</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=PRACTITIONER_WEBROOT;?>home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?php echo __('Appointments');?></li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
			<?php if(!empty($appointments)){?>
			<table class="table table-hover">
				<tr><th><?php echo $this->Paginator->sort('first_name');?></th><th><?php echo $this->Paginator->sort('last_name');?></th><th><?php echo $this->Paginator->sort('phn','Personal Helth Number');?></th><th><?php echo $this->Paginator->sort('phone');?></th><th class="pull-right"><?php echo __('Actions');?></th></tr>
				<?php
				foreach ($appointments as $appointment):
				?>
				<tr>
					<td><?php echo $appointment['Appointment']['first_name']; ?></td>
					<td><?php echo $appointment['Appointment']['last_name']; ?></td>
					<td><?php echo $appointment['Appointment']['phn']; ?></td>
					<td><?php echo $appointment['Appointment']['phone']; ?></td>
					<td class="pull-right">
						<?php echo $this->Html->link(__('View Details', true), array('action' => 'view', $appointment['Appointment']['id']),array('class'=>'btn btn-default btn-sm btn-info')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<div class="pull-left">
				<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>	
				</p>
			</div>
			<div class="paging pull-right">
				<?php echo $this->Paginator->prev('<< ' . __('previous', true), array('class'=>'btn btn-primary'), null, array('class'=>'disabled btn btn-default'));?>
			 | 	<?php echo $this->Paginator->numbers();?>
		 	 |	<?php echo $this->Paginator->next(__('next', true) . ' >>', array('class'=>'btn btn-primary'), null, array('class' => 'disabled  btn btn-default'));?>
			</div>
			<?php }else{ ?>
				<div class="alert alert-danger">Records not found.</div>
			<?php	} ?>
			</div>
		</div>
	</div>
</section>
