<!DOCTYPE html>
<html>
<head>
	<title>Rating Contestant</title>
</head>
<body>

	From Date <input type="date"> To Date <input type="date"><input type="button" value="search"/>
	<table border="1">
		<tr>
			<th>Full Name</th>
			<th>Date Of Birth</th>
			<th>District</th>
			<th>Average Rating</th>
		</tr>

		<?php foreach ($records as $row): ?>
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
				<td>
					<?php foreach ($ratings as $ryu): ?> 
						<?php	if($ryu->contestantid == $row->id) echo $ryu->rating; ?> <!-- If clause to check everytime for matching ID -->
					<?php endforeach; ?>

					<?php echo anchor("rating/rateContestant/$row->id"," Rate This Contestant!"); ?>
				</td>
			</tr>
		<?php endforeach; ?>

	</table>
	<?php echo anchor('main',"Back"); ?>


</body>
</html>