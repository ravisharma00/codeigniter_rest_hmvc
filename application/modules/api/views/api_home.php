<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>stories</h1>
	<?php foreach ($current as $key => $value) { ?>
	<div>
		story_id :<?php echo $value->story_id; ?>	<br>
		story_title:<?php echo $value->story_title; ?> <br>
		story_slug:<?php echo $value->story_slug; ?> <br>
		cover_image:<?php echo $value->cover_image; ?> <br><br>
	</div>
	<?php } ?>
</body>
</html>