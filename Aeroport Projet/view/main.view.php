<!DOCTYPE html>
<!--v5-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="../css/styles.css">
	<title>Main Airport</title>
</head>
<body>
	<div >
		<!--Bannière-->
		<header>
				<h1>Projet Aéroport</h1>			
		</header>	

		<section class="main">
			<!--Affiche les images-->
			<div class="pictures">
				<?php foreach ($pictures as $pic):?> 
					<div class="thumb">
						<a href="picPage.php? id=<?php echo $pic['picID']; ?> p=<?php echo $actual_page; ?>">
						<img src="../pictures/<?php echo $pic['picPath'] ?>" alt="<?php echo $pic['picName'] ?>">
						</a>
					</div>
				<?php endforeach;?>
			</div>
		</section>
		<footer>
			<p class="copyright">Projet Aéroport crée par :<br />Charles Olivier Marsolais et Julien Florent<br />
			Collège de Rosemont AEC POO 2017</p>
		</footer>		
	</div>	
</body>
</html>
