<!DOCTYPE html>
<html>
<head>
	<title>Editing Contestant	</title>
</head>
<body>
	<h1>Edit Contestant</h1>
	<?php echo $this->upload->display_errors('<div class="alert">','</div>'); ?>
	<?php echo form_open_multipart('main/editCandidate'); ?>
	
		<table border="1">
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstname"  value="<?php echo $user->firstname; ?>" /></td>
			</tr>
			<tr>
				<td>Last Name: </td>
				<td><input type="text" name="lastname" value="<?php echo $user->lastname; ?>" /></td>
			</tr>
			<tr>
				<td>Date Of Birth</td>
				<td><input type="date" name="dob" value="<?php echo $user->dateofbirth; ?>" /></td>
			</tr>
			<tr>
				<td>Is Active: </td>
				<td><input type="checkbox" name="isactive" <?php if($user->isactive == 1){ echo "checked";} ?>  /></td>
			</tr>
			<tr>
				<td>District</td>
				<td>
					<select name="district">
						<?php foreach ($district as $dist): ?>              <!-- UNABLE TO DO STUFFS HERE -->
							<option value="<?php echo $dist->name; ?>">	
								<?php echo $dist->name; ?>
							</option>
						<?php endforeach; ?>	           <!--  Dazzeled -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male" <?php if($user->gender == "male"){ echo "checked";}?> />Male
					<input type="radio" name="gender" value="female" <?php if($user->gender == "female"){ echo "checked";} ?> />Female
				</td>
			</tr>
			<tr>
				<td>Photo*</td>
				<td>
					<input type="file" name="photourl" />  <!-- PhotoUrl -->
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea rows="5" cols="30" name='address'><?php echo $user->address; ?></textarea>
				</td>
			</tr>
		</table>
		<input type="hidden" name="c_id" value="<?php echo $user->id; ?>" />
		<input type="submit" value="Save" />
		<a href="<?php echo base_url('main/contestant'); ?>">Cancel</a>
		<!-- <input type="reset" value="Cancel" /> -->
	</form>

</body>
</html>