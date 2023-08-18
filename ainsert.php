<!DOCTYPE html>
<html>
<head>
	<style>
		.f{
			width: 380px;
      			height: 600px;
       			padding:20px;
      			border: 1px solid gray;
      			box-sizing: border-box;
      			margin:auto;
    		}
	</style>
</head>
  <body>
<h1 style="color:blue">Update the schemes of age 31-60</h1>
	<form method="post" class="f" action="aprocess.php">
		Logo:<br>
		<input type="text" name="Logo">
		<br>
		Scheme:<br>
		<input type="text" name="Scheme">
		<br>
		Details:<br>
		<input type="text" name="Details">
		<br>
		url:<br>
		<input type="text" name="url">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>