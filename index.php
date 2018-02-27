<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
<div class="col-sm-2">
	<h1 class="text-center">contact</h1>
<form id="form" action="save.php" method="POST" class="well form-group" >
		<label for="nom">name: </label>
		<input type="text" id="nom" name="nom" class="form-control col-sm-6">
		<p id="content" class="label label-default"></p>
<br/>
		<labe>Email :</label><input type="email" class="form-control"  name="email" id="email">
		<label>Password:</label><input type="Password" class="form-control"  name="pass" id="pass">
		<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="app.js"> </script>
</body>
</html>


