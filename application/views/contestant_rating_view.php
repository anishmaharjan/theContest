<!DOCTYPE html>
<html>
<head>
	<title>Contestant Rating</title>
</head>
<body>
	<h1>Rate Contestant</h1>
	
	<p>Contestant Name: <b><?php echo $record->firstname." ".$record->lastname; ?></b></p>
	<form action="<?php echo base_url("rating/theVote/$record->id"); ?>" method="post">
		<input type="radio" name="rating" value="1" />1
		<input type="radio" name="rating" value="2" />2
		<input type="radio" name="rating" value="3" checked />3
		<input type="radio" name="rating" value="4" />4
		<input type="radio" name="rating" value="5" />5
		<br/>
		<input type="submit" value="Save Rating" />
		<input type="reset" value="Cancel" />
	</form>
	
</body>
</html>