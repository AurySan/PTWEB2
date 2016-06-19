<?php session_start();

// Fonction qui permet d'ajouter une erreur dans une session pour l'afficher sur la page d'accueil
function alert($message, $type = 'info'){
  $_SESSION['alert'] = [
    'message' => $message, 
    'type' => $type
  ];
}

if(isset($_POST) AND !empty($_POST)){ // On vérifie que le formulaire n'est pas vide
 	extract($_POST); // Permet d'extraire $_POST['exemple'] en $exemple
    if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($message)){ //vérifier que les champs ne sont pas vides
    	if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){ //vérifier que l'adresse mail est valide

    		$receveur = 'auryane.reisser@gmail.com';
    		$envoyeur = $email;
     		$titre = '[auryanereisser.fr]';

	     $headers = "From: mailer@auryanereisser.fr" . "\r\n" .
	     "Reply-To: $envoyeur" . "\r\n" .
	     "X-Mailer: PHP/" . phpversion();

	     if(mail($receveur, $titre, $message, $headers)){
	     	alert('Votre message à bien été envoyé', 'success');
	     }else{ alert('Une erreur est survenue', 'danger'); }
    	}else{ alert('Veuillez renseigner une adresse email valide', 'danger'); }
    }else{ alert('Veuillez renseigner tous les champs', 'danger'); }
}

// On redirige vers la page principale
header('location:./');
?>