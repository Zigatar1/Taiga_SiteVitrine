
<?php
/* Connection base de données */
$user = 'root';
$passwd = 'root';
$host = 'localhost';
$bdd = 'db_taiga';
$connect = mysqli_connect($host,$user,$passwd,$bdd); 
if (!$connect)
die('Echec de connexion au serveur de base de données :'. mysqli_connect_error() . '(' . mysqli_connect_errno() .')');

/* récuperation des données du formulaire */
$Nom_Utilisateur = $_POST['Nom_Utilisateur'];
$Prenom_Utilisateur = $_POST['Prenom_Utilisateur'];
$Email = $_POST['Email'];
$MDP_Utilisateur1 = $_POST['MDP_Utilisateur1'];
$MDP_Utilisateur2 = $_POST['MDP_Utilisateur2'];
$Hash_MDP_Utilisateur1 = password_hash($MDP_Utilisateur1, PASSWORD_BCRYPT);
$Hash_MDP_Utilisateur2 = password_hash($MDP_Utilisateur2, PASSWORD_BCRYPT);

if(!check_mdp_format($password_1)){
	echo "Le format du mot de passe est incorrect";	
    echo "<br/>";
}

if (!password_verify($Hash_MDP_Utilisateur1, $Hash_MDP_Utilisateur2)) {
    echo 'mot de passe valide';
    echo'<br/>';
    } 
else {        
    echo 'mot de passe non valide';
    echo'<br/>';
}


if (filter_var($Email, FILTER_VALIDATE_EMAIL)){
    echo 'email valide';
    echo'<br/>';
}
else{
    die('email non valide');
}

// S'assurer que l'utilisateur ne s'inscrive pas deux fois. 
		// L'identifiant et le email doivent être uniques
		// print_r($_POST);
$user_check_query = "SELECT * FROM users WHERE Nom_Utilisateur='$Nom_Utilisateur' 
                                OR Email='$Email' LIMIT 1";

$result = mysqli_query($connect, $user_check_query);
$user = mysqli_fetch_assoc($result);
// print_r($user);

if ($user) { // si l'identifiant a déjà été choisit par un autre utilisateur
    if ($user['Nom_Utilisateur'] === $Nom_Utilisateur) {
      echo "L'identifiant existe déjà, choisissez un autre";
    }
    if ($user['Email'] === $Email) {
      echo "L'adresse mail existe déjà";
    }
}


/* envoie des données */
$query = "INSERT INTO `users`(`Nom_Utilisateur`, `Prenom_Utilisateur`, `Email`, `MDP_Utilisateur`) VALUES ('$Nom_Utilisateur','$Prenom_Utilisateur','$Email', '$Hash_MDP_Utilisateur1')";
$link = mysqli_connect("localhost", "root", "root", "db_taiga");
$result = mysqli_query($link, $query);

if(!$result)
    die('echec dans l\'insertion:'.mysqli_error($link));
echo 'Insertion réussie ... ';
echo'<br/>';
mysqli_close($link);

// // redirection index.php
// header("Location: index.php", TRUE, 301);
// exit();

    function check_mdp_format($MDP_Utilisateur1)
        {
            $uppercase = preg_match('@[A-Z]@', $MDP_Utilisateur1);
            $lowercase = preg_match('@[a-z]@', $MDP_Utilisateur1);
            $number    = preg_match('@[0-9]@', $MDP_Utilisateur1);
            $specialChars = preg_match('@[^\w]@', $MDP_Utilisateur1);
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($MDP_Utilisateur1) < 8)
                {
                return false;
            }
            else{
                return true;
        }
    }

?>