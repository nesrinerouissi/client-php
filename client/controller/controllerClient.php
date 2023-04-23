<?php
//$controller = "client";
require_once("{$ROOT}{$DS}model{$DS}ModelClient.php"); // chargement du modèle

if (isset($_REQUEST['action']))
	/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action = "login";
session_start();

switch ($action) {

	case "login":
		// Vérifier si l'utilisateur est déjà connecté
		if (isset($_SESSION['idClient']) && isset($_SESSION['email'])) {
			header('Location: index.php?controller=product&action=readAll');
			exit();
		}

		// Affichage de la page de connexion
		$view = "login";
		// Vérification des identifiants de connexion
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$user = ModelClient::selectByEmail($email);

			if ($user != null && $user->getPassword() == $password) {
				// Authentification réussie : mise à jour de la session
				$_SESSION['idClient'] = $user->getIdClient();
				$_SESSION['email'] = $user->getEmail();
				header('Location: index.php?controller=product&action=home');
				exit();
			} else {
				// Erreur d'authentification : affichage du message d'erreur
				$error = "Identifiant ou mot de passe incorrect.";
				require("{$ROOT}{$DS}view{$DS}view.php");
			}
		} else {
			// Affichage de la page de connexion
			require("{$ROOT}{$DS}view{$DS}view.php");
		}
		break;

	case "signUp":
		$pagetitle = "Enregistrer un client";
		$view = "signUp";
		require("{$ROOT}{$DS}view{$DS}view.php");
		break;


	case "signedUp":

		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstName']) && isset($_POST['lastName'])  && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['birthDate'])) {

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			$email = $_POST['email'];
			$password = $_POST['password'];

			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$birthDate = $_POST['birthDate'];

			$recherche = ModelClient::selectByemail($email);
			if ($recherche == null) {
				$u = new ModelClient($firstName, $email, $password, $lastName,   $address, $phone, $birthDate);
				$tab = array(
					"firstName" => $firstName,

					"email" => $email,
					"password" => $password,
					"lastName" => $lastName,
					"address" => $address,
					"phone" => $phone,
					"birthDate" => $birthDate,

				);
				$u->insert($tab);
				$pagetitle = "client Enregistré";
				$view = "login";
				require("{$ROOT}{$DS}view{$DS}view.php");
			}
		}
		break;
	case "logout":
		unset($_SESSION['idClient']);
		unset($_SESSION['email']);
		session_destroy();
		$view = "logout";
		require("{$ROOT}{$DS}view{$DS}view.php");
		break;

	default:
		// Comportement par défaut : affichage de la page de connexion
		$view = "login";
		require("{$ROOT}{$DS}view{$DS}view.php");
		break;
}
