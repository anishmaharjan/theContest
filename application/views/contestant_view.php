<!DOCTYPE html>
<html>
<head>
	<title>Contestants</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/scripts/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">

		<h1>Contestants</h1>
		<table border="2" class='table table-bordered'>
			<tr>
				<th>Full Name</th>
				<th>Date of Birth</th>
				<th>District</th>
				<th>Gender</th>
				<th>Address</th>
				<th colspan="2">Options</th>
				<th>Pic Thumb</th>
			</tr>
			<?php foreach($records as $row): ?>
				<tr> 
					<td><?php echo $row->firstname." ".$row->lastname; ?></td>
					<td><?php echo $row->dateofbirth; ?></td>
					<td>
						<?php 
						foreach ($district as $dist):
							if($row->districtid == $dist->id){ echo $dist->name; } 
						endforeach;
						?>
					</td>
					<td><?php echo $row->gender; ?></td>
					<td><?php echo $row->address; ?></td>				
					<td><?php echo anchor("main/editContestant/$row->id","Edit",'class="btn btn-default"'); ?></td>
					<td><?php echo anchor("main/deleteContestant/$row->id","Delete",'class="btn btn-default"'); ?></td>
					<td><img src="<?php echo $row->photourl; ?>" height="50"></td>
				</tr>
			<?php endforeach; ?>
		</table>
		
		<?php echo anchor('main/addContestant',"Add",'class="btn btn-primary btn-lg"'); ?>
		<?php echo anchor('main',"Back",'class="btn btn-default btn-lg"'); ?>
	</div>

</body>
</html>