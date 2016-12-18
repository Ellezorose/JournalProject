<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Journal</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<form method="post" action="entry_post.php">
			<label for="Date">Date</label>
			<input type="date" name="Date" max="<?php echo date("Y-m-d"); ?>" required>
			<label for="Title">Title</label>
			<input type="text" name="Title" required>
			<label for="Entry">Journal Entry</label>
			<textarea name="Entry" rows="10" cols="50" placeholder="Today..." required></textarea>
			<input type="text" name="Photo" disabled>
			<input type="text" name="Tag" placeholder="#tags">
			<button type="submit">Submit</button>
		</form>
	</body>
</html>