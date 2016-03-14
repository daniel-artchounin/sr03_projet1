<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Page d'accueil du trobinoscope</title>
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>		
		<header>
			<h1>Trombinoscope</h1>
		</header>
		<section>
			<?php 
				$surname = empty($_GET['surname'])?"":htmlspecialchars($_GET['surname']); 
				$name = empty($_GET['name'])?"":htmlspecialchars($_GET['name']);
			?>
			<form method="post" action="result.php">
				<fieldset>
					<legend>Personne recherchée</legend>
						<div class="col-md-4">
							<div class="form-group">
								<label for="nom">Votre nom : </label>
								<input type="text" name="nom" placeholder="Nom" id="nom" class="form-control" value="<?php echo($surname); ?>" required="required" autofocus/>
							</div>

							<div class="form-group">
								<label for="prenom">Votre prénom : </label>
								<input type="text" name="prenom" placeholder="Prénom" id="prenom" class="form-control" value="<?php echo($name); ?>" required="required"/>
							</div>
							<button type="submit" class="btn btn-default">Envoyer</button>
						</div>
				</fieldset>
			</form>
		</section>
		<footer>
			<br />
			<p>ARTCHOUNIN Daniel/ TCHANDJOU NGOKO Adrien</p>
		</footer>	
	<script src="form.js"></script>
	</body>
</html>
