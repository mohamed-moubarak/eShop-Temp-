<?php session_start();?>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="alert alert-success">
  <a href="../index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Logged in Successfully!</strong> 
</div>
</div>
<?php 
header( "refresh:2;url=../index.php" );
 ?>
</body>