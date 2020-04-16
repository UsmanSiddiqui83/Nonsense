<html>
<head>
	<title>Hello world!</title>
</head>
<body>
	<img id="logo" src="logo.png" />
	<h1><?php echo "Hello ".($_ENV["NAME"]?$_ENV["NAME"]:"world")."!"; ?></h1>
	<?php if($_ENV["HOSTNAME"]) {?><h3>My Container id <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
</body>
</html>
