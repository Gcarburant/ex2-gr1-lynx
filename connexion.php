<?php
    if(isset($_POST['courriel']) && $_POST['courriel'] == '') {
        header('Location: Compte.php'); // redirection HTTP
    }
?>

voici l'info dans le formulaire

<?php
    echo '<hr>';
    echo $_POST['courriel'];
    echo '<hr>';
    echo $_POST['mdp'];
?>