<?php

class users_ctrl extends CI_Controller
{
	// save personne
	public function ajout_personne()
{
	$this->load->model('users_model', 'newspers');
	$this->load->database();

		# code...
		$resultat = $this->newspers->ajouter_personne(1217,'herve', 'elegue', 12/12/2000, 'Fem', 'herve', 12121223, 'yde', 'camer', 'rererer');
		return true;
	var_dump($resultat);
	}
	
// save specialiste
	public function ajout_specialiste()
{
	$this->load->model('users_model', 'newscl');
	$this->load->database();
		# code...
		$resultat = $this->newscl->ajouter_specialiste(6, 2342,'neurologue', 'CHU');
		return true;
	var_dump($resultat);
}
// save agenda
	public function ajout_agenda()
{
	$this->load->model('users_model', 'newscl');
	$this->load->database();
		# code...
		$resultat = $this->newscl->ajouter_agenda(2017, 'juin','lubdi', '1 heures', 6);
		return true;
	var_dump($resultat);
}
// save caissier
	public function ajout_caissier()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_caissier(3);
		return true;
	var_dump($resultat);
}
 //save patient
	public function ajout_patient()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_patient(8,'herve elegue');
		return true;
	var_dump($resultat);
}
//save hopîtal
	public function ajout_hopital()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_hopital('CHU','YDE', 'cameroun');
		return true;
	var_dump($resultat);
}

//connexion utilisateur
	public function connexion()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->connexion_user('lepros','hervve', 'cameroun');
		return true;
	var_dump($resultat);
}
//save salle
	public function ajout_salle()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_salle('salle de conference',12, 4);
		return true;
	var_dump($resultat);
}
//save service
	public function ajout_service()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_service('info',6);
		return true;
	var_dump($resultat);
}
//save equipement
	public function ajout_equipement()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_equipement('voiture', 12/12/2000, 12/12/2000, 'en service', 'BMW', 'blanche',123, 9);
		return true;
	var_dump($resultat);
}

//save consultation
	public function ajout_consultation()
{
	$this->load->model('users_model');
	$this->load->database();
		# code...
		$resultat = $this->users_model->ajouter_consultation('$nom',32,121,2/12/2000, 4, 3,3);
		return true;
	var_dump($resultat);

	
}

/* partie des requetes select*/

// liste des specialistes get_all_consultation
function list_specialiste(){
	    $this->load->database();
		$this->load->model('users_model');
		$data = $this->users_model->get_all_specialiste();
		//$this->load->view('consulte.html', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}

		// liste des consultations 
function list_consultations(){
	    $this->load->database();
		$this->load->model('users_model');
		$data = $this->users_model->get_all_consultation();
		//$this->load->view('consulte.html', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}

// liste des caissiers
function list_caissier(){
	    $this->load->database();
		$this->load->model('users_model');
		$data = $this->users_model->get_all_caissier();
		//$this->load->view('consulte.html', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}
// liste des specialistes par hopital
function list_specialiste_hopital(){
	    $this->load->database();
		$this->load->model('users_model');
		$data = $this->users_model->get_all_specialist_hopital();
		//$this->load->view('liste/list_sp.php', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}
		// liste des equipement
function list_equipement(){
	    $this->load->database();
		$this->load->model('users_model');
		$data = $this->users_model->get_all_equipement();
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}
	function list_specialiste_large(){
	    $this->load->database();
		$this->load->model('users_model');
		$data['specialiste'] = $this->users_model->get_all_specialiste_large();
		$data['hopital'] = $this->users_model->get_all_specialiste_hopital();
		//$this->load->view('consulte.html', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		echo $data ;
		}
				// suppresion rendez-vous
function supprime_rdv(){
	    $this->load->database();
		$this->load->model('users_model');
		$data= $this->users_model->supprimer_rdv($id);
		//header("Location:http://localhost/sagmel/#/enregistrer")
		return true ;
		}
		// supprimer un equipement
		function supprime_equipement(){
	    $this->load->database();
		$this->load->model('users_model');
		$data= $this->users_model->supprimer_equipement(1);
		//header("Location:http://localhost/sagmel/#/enregistrer")
		echo $data;
		}
	

/*

public function ajout_employe()
{
	$this->load->model('users_model', 'newsemp');
	var_dump($_POST);
	if (!empty($_POST)) {

		# code...
		$resultat = $this->newsemp->ajouter_employe($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['type'], $_POST['sexe'], $_POST['pass']);
		return true;
	var_dump($resultat);
	}
	
}

public function ajout_auteur()
{
	$this->load->model('users_model', 'newsaut');
	var_dump($_POST);
	if (!empty($_POST)) {

		# code...
		$resultat = $this->newsaut->ajouter_auteur($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['residence'], $_POST['sexe'], $_POST['pass'], $_POST['datenais'], $_POST['rue']);
		return true;
	var_dump($resultat);
	}
	
}

function consulter_client(){
		$this->load->model('users_model');
		$data= $this->users_model->get_all_client();
    //var_dump($data);
		$this->load->view('consulter/listeclient', $data);

		header('Content-type:application/json');
		die(json_encode($data));
		}

function consulter_employe(){
		$this->load->model('users_model');
		$data = $this->users_model->get_all_employe();
		$this->load->view('consulter/listeemploye', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		}



function consulter_livre(){
		$this->load->model('users_model');
		$data = $this->users_model->get_all_livre();
		$this->load->view('consulte.html', $data);
		header('Content-type:application/json');
		die(json_encode($data));
		}
		*/
}
?>