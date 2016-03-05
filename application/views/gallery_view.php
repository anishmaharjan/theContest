<!DOCTYPE html>
<html>
<head>
	<title>Photo Gallery</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/scripts/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/scripts/css/lightbox.css'); ?>">
</head>

<body>
	
	<div class="container">
		<h1>Photo Gallery</h1>
		<div class="gallery">

			<div class="row"> <!-- //bootstrap row here begins -->
				<?php foreach ($records as $row): ?>

					<div class="col-lg-3">
						<a href="<?php echo $row->photourl; ?>" data-title="<?php echo $row->firstname." ".$row->lastname; ?>" data-lightbox="Contestants">
							<img src="<?php echo $row->photourl; ?>" height="200" class="img-thumbnail" /><?php echo $row->firstname; ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div> <!-- //row ends -->
		</div>

		<p><a href="<?php echo base_url('main'); ?>" class="btn btn-default">Back</a></p>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/scripts/js/jquery-2.2.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/js/lightbox.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/js/bootstrap.min.js'); ?>"></script>

</body>
</html>