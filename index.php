<?php 
require_once 'vendor/erusev/parsedown/Parsedown.php';

$Parsedown = new Parsedown();

function req(){
	$req = $_GET['request-text'];
	$res = $_GET['response-text'] = "";

	return $req;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Markdown Preview</title>
</head>
<body>
	<main class="main-container">
		<div class="container">
			<form action="index.php" method="GET">
				<div class="textareas">
					<textarea rows="10" cols="50" name="request-text"></textarea>
					<label><?php echo $Parsedown->text(req()); ?>
				</div>
				<input type="submit" value="Enter">
			</form>
		</div>
	</main>
</body>
</html>