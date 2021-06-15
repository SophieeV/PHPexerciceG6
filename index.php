<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceG6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Formulaire</h1>
    <form method="post" action="index.php" enctype="multipart/form-data">
        <label for="civilite">Civilité</label>
             <input type="text" id="civilite" name="civilite" placeholder="civilité" required></br>
        <label for="name">Nom</label>
             <input type="text" id="name" name="nom" placeholder="votre nom" required></br>
        <label for="surname">Prénom</label>
            <input type="text" id="surname" name="prenom"placeholder="votre prénom" required></br>
        <label for="fichier">fichier</label>
            <input type="file" id="fichier" name="fichier" required></br>
      <button type="submit">envoyer</button>
    </form>

    <?php echo htmlspecialchars( $_POST['civilite']. ' ' .$_POST['nom']. ' ' . $_POST['prenom']. ' '.$_FILES['fichier']['type']);
  
  ?>
</body>
</html>