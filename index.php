
<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio développeur web et applications">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDW portfolio - développeur</title>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<ul>
		<li><a href="index.php?page=1">études</a></li>
		<li><a href="index.php?page=2">formations</a></li>
		<li><a href="index.php?page=3">contact</a></li>
		
	</ul>
	<main>
		<h1><span aria-hidden="true">🧑‍💻</span> EDW portfolio - développeur</h1>

	
			
	        <!-- ici les pages d'inclusion -->
            <?php
                include_once __DIR__ ."/controller/baseController.php";
            ?>

	</main>
<footer>
	<p>&copy; - EDW - 2024<br>
		<img src="./asset/giusmili-lead-developer.svg" alt="badge">
	</p>
</footer>
	
</body>
</html>