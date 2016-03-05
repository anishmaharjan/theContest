<!DOCTYPE html>
<html>
<head>
	<title>Contestant Rating</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/scripts/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">

		<h1>Rate Contestant</h1>

		<p>Contestant Name: <b><?php echo $record->firstname." ".$record->lastname; ?></b></p>
		<form action="<?php echo base_url("rating/theVote/$record->id"); ?>" method="post">
			<div class="radio">
				<label>
					<input type="radio" name="rating" value="1" />1
				</label>
				<label>
					<input type="radio" name="rating" value="2" />2
				</label>
				<label>
					<input type="radio" name="rating" value="3" checked />3
				</label>
				<label>
					<input type="radio" name="rating" value="4" />4
				</label>
				<label>
					<input type="radio" name="rating" value="5" />5
				</label>
			</div>
			<br/>
			<input type="submit" value="Save Rating" class="btn btn-default" />
			<?php echo anchor('rating',"Back",'class="btn btn-default"'); ?>
		</form>
	</div>
	
</body>
</html>