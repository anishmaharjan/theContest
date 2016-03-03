<!DOCTYPE html>
<html>
<head>
	<title>Adding Contestant	</title>
</head>
<body>
	<h1>Contestant Form</h1>
	<form action="<?php echo base_url('main/registerCandidate');?>" method="POST" >
		<table border="1">
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstname" /></td>
			</tr>
			<tr>
				<td>Last Name: </td>
				<td><input type="text" name="lastname" /></td>
			</tr>
			<tr>
				<td>Date Of Birth</td>
				<td><input type="date" name="dob" /></td>
			</tr>
			<tr>
				<td>Is Active: </td>
				<td><input type="checkbox" name="isactive" value='1' /></td>
			</tr>
			<tr>
				<td>District</td>
				<td>
					<select name="district">
						<?php foreach ($district as $dist): ?>
							<option value="<?php echo $dist->name; ?>">	
								<?php echo $dist->name; ?>
							</option>
						<?php endforeach; ?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male" checked/>Male
					<input type="radio" name="gender" value="female"/>Female
				</td>
			</tr>
			<tr>
				<td>Photo</td>
				<td>
					<input type="file" name="photourl" />
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea rows="5" cols="30" name='address'></textarea>
				</td>
			</tr>
		</table>
		<input type="submit" value="Save" />
		<a href="<?php echo base_url('main/contestant'); ?>">Cancel</a>
		<!-- <input type="reset" value="Cancel" /> -->
	</form>

</body>
</html>