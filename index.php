<?php

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'event-manager-pro';

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

$statement = $connection->prepare('SELECT * FROM events');
$statement->execute();

$events = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	$events[] = $row;
}

?>
<!doctype html>
<html>
	<head>
    	<meta charset="utf-8">
		<title>Event Manager Pro</title>

		<!-- Include Material Design Lite library [getmdl.io] -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

		<!-- Include custom CSS -->
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class="mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
		<div class="mdl-layout">
	      	<header class="mdl-layout__header">
		        <div class="mdl-layout__header-row">
		          	<h3>Event Manager Pro</h3>
		        </div>
	      	</header>
	      	<main class="mdl-layout__content">
				<div class="grid">

					<?php

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'event-manager-pro';

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

$statement = $connection->prepare('SELECT * FROM events');
$statement->execute();

$events = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	$events[] = $row;
}

?>
<html><body>
<link rel="stylesheet" href="styles.css"
  type="text/css">
<script src="/jquery-1.9.1.min.js" type="text/javascript">
</script>
<ul class="cbp-ig-grid">
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-shoe"></span>
			<h3 class="cbp-ig-title">Squid voluptate</h3>
			<span class="cbp-ig-category">Fashion</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-ribbon"></span>
			<h3 class="cbp-ig-title">Mixtape lo-fi</h3>
			<span class="cbp-ig-category">Design</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-milk"></span>
			<h3 class="cbp-ig-title">Cosby sweater</h3>
			<span class="cbp-ig-category">Lifestyle</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-whippy"></span>
			<h3 class="cbp-ig-title">Commodo</h3>
			<span class="cbp-ig-category">Food</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-spectacles"></span>
			<h3 class="cbp-ig-title">Bitters kitsch</h3>
			<span class="cbp-ig-category">Gadgets</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span class="cbp-ig-icon cbp-ig-icon-doumbek"></span>
			<h3 class="cbp-ig-title">Austin proident</h3>
			<span class="cbp-ig-category">Music</span>
		</a>
	</li>
</ul>
		      		<!-- End Event Card -->

		      		<?php } ?>

      	
	</body>
</html>