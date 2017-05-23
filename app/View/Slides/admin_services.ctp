<section class="content-header">
  <h1>
    <?php echo __('Slides Services');?>
    <small>List of services</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=PRACTITIONER_WEBROOT;?>home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?php echo __('List of services');?></li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
			<table class="table table-hover">
				<tr><th>Request For</th><th>Request Function</th><th>Request Type</th></tr>				
				<tr>
					<td>Get Slide List</td>
					<td><?=WEBROOT?>slides/get_slides($count = 10);</td>
					<td>GET</td>
				</tr>
			</table>
			</div>
		</div>
	</div>
</section>
