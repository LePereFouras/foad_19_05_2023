<?php
// Connexion à la bdd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

  
    $sql = "INSERT INTO utilisateur (nom, prenom) VALUES ('$nom', '$prenom')";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>

<form method="post" action="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br>

    <input type="submit" value="Ajouter">
</form>


<?php
// Connexion à la bdd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérif
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récup les valeurs du formulaire
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    // Requête de MAJ
    $sql = "UPDATE utilisateur SET nom='$nom', prenom='$prenom' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>


<form method="post" action="">
    <label for="id">ID de l'utilisateur :</label>
    <input type="number" name="id" id="id" required><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br>

    <input type="submit" value="Modifier">
</form>


<?php
// Connexion à la bdd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérif la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'ID de l'utilisateur à supprimer
    $id = $_POST["id"];

    // Requête de suppr
    $sql = "DELETE FROM utilisateur WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur : " . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>


<form method="post" action="">
    <label for="id">ID de l'utilisateur :</label>
    <input type="number" name="id" id="id" required><br>

    <input type="submit" value="Supprimer">
</form>
