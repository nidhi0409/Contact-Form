<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-container">
	<form method="POST" action="form.php">
		<div class="input-container">
		<input type="text" name="name" placeholder="Enter Name">
		</div >
		<div class="input-container">
		<input type="email" name="email" placeholder="Enter Your Email">
		</div>
		<div class="input-container">
		<input type="text" name="subject" placeholder="Enter Subject">
		</div>
		<div class="input-container">
		<textarea name="message" rows="4" cols="50"  placeholder="Enter Message"></textarea>
		</div>
		<input type="submit" name="submit">
	</div>
	</form>
</body>
</html>