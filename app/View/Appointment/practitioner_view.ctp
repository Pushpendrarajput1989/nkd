<section class="content-header">
  <h1>
    <?php echo __('Appointment Details');?>
    <small>Details of appointment</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=PRACTITIONER_WEBROOT;?>home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?php echo __('Appointment Details');?></li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-6">
			<ul class="list-unstyled view-action">
				<li><?php echo $this->Html->link(__('Back', true), array('action' => 'index'),array('class'=>'btn btn-default btn-sm btn-info')); ?> </li>
			</ul>
		</div>
		<div class="col-xs-12">
			<div class="box box-primary">
			<table class="table table-bordered">
				<tr><td>This Medical Practice is where I am registered : </td><td><?php echo getYesNo($appointment['Appointment']['where_i_am']); ?></td></tr>
				<tr><td>I am 18 or over and I am taking the consultation for myself (and not for my child)? : </td><td><?php echo getYesNo($appointment['Appointment']['over_18']); ?></td></tr>
				<tr><td>The issue I am consulting about is an immediate emergency : </td><td><?php echo getYesNo($appointment['Appointment']['emergency']); ?></td></tr>
				<tr><td>Condition : </td><td><?php echo $appointment['Condition']['condition']; ?></td></tr>
				<tr><td>First Name : </td><td><?php echo $appointment['Appointment']['first_name']; ?></td></tr>
				<tr><td>Last Name : </td><td><?php echo $appointment['Appointment']['last_name']; ?></td></tr>
				<tr><td>Date of birth : </td><td><?php echo $appointment['Appointment']['dob']; ?></td></tr>
				<tr><td>Personal Helth Number : </td><td><?php echo $appointment['Appointment']['phn']; ?></td></tr>
				<tr><td>Phone : </td><td><?php echo $appointment['Appointment']['phone']; ?></td></tr>
				<tr><td>Email : </td><td><?php echo $appointment['Appointment']['email']; ?></td></tr>
				<tr><td>Notes : </td><td colspan="5"><?php echo $appointment['Appointment']['notes']; ?></td></tr>
			</table>
			</div>
		</div>
	</div>
</section>
