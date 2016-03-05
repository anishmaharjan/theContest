<!DOCTYPE html>
<html>
<head>
	<title>Rating Contestant</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/scripts/css/bootstrap.min.css'); ?>">
	
</head>
<body>
	<div class="container">

		<h1>List of Contestants</h1>
		<p>	
			From Date <input type="date"> To Date <input type="date"><input type="button" value="search" class="btn" />
		</p>
		<table border="1" class='table table-bordered'>
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
						<kbd>

							<?php foreach ($ratings as $ryu): ?> 
								<?php	if($ryu->contestantid == $row->id) echo $ryu->rating; ?> <!-- If clause to check everytime for matching ID -->
							<?php endforeach; ?>

						</kbd> 
						<?php echo anchor("rating/rateContestant/$row->id","  Rate This Contestant!",'class="btn btn-default btn-xs"'); ?>
					</td>
				</tr>
			<?php endforeach; ?>

		</table>
		<?php echo anchor('main',"Back",'class="btn btn-default"'); ?>

	</div>

</body>
</html>