<!DOCTYPE html>
<html>
<head>
	<title>Contestants</title>
</head>
<body>
	<h1>Contestants</h1>
	<table border="2">
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
				<td><?php echo anchor("main/editContestant/$row->id","Edit"); ?></td>
				<td><?php echo anchor("main/deleteContestant/$row->id","Delete"); ?></td>
				<td><img src="<?php echo $row->photourl; ?>" height="50"></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo date("Y-m-d"); ?>
	<?php echo anchor('main/addContestant',"Add"); ?>
	<?php echo anchor('main',"Back"); ?>

</body>
</html>