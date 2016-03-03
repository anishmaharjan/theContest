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
		</tr>
		<?php foreach($records as $row): ?>
		<tr>
			<td><?php echo $row->firstname.$row->lastname; ?></td>
			<td><?php echo $row->dateofbirth; ?></td>
			<td><?php echo $row->districtid; ?></td>
			<td><?php echo $row->gender; ?></td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo anchor('main/editContestant/$row->id',"Edit"); ?></td>
			<td><?php echo anchor('main/deleteContestant/$row->id',"Delete"); ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php echo anchor('main/addContestant',"Add"); ?>

</body>
</html>