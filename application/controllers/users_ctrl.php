<?php
/**
 * Created by herve elegue.
 * User: dolph
 * Date: 26/05/2017
 * Time: 01:11
 */
class users_ctrl extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->database();
    }
	// save personne
 public function ajout_personne()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description'); 
        
        $nom = "Carole";
        $prenom = " Thomas"; 
        $tel = 655923687 ;
        $ville = "bafia" ;
        $email = "herve@gmail.com" ;
        $cni = 1212134;
        $datenais = 12/12/2000;
        $pays = "Benin";
        $sexe = "masc";
        $pass ="blablal";
        $pass=sha1($pass);
        $data = array(
		        'nomp'=> $nom,
				'prenom' => $prenom,
				'adresse_email' => $email,
				'telephone' => $tel,
                'ville'=> $ville,
				'numero_cni' => $cni,
				'date_de_naissance' => $datenais,
				'pays' => $pays,
		        'sexe' => $sexe,
		        'pass' => $pass,
        );
        
        $this->users_model->set('personne',$data);
        
        echo  "personne enregistrer avec succes !!!! ";
    }

// save specialiste
	public function ajout_specialiste()
{
	    $matricule = 23434;
        $specialite = "chirurgie"; 
        $hopital = "Laquintinie";
        $id = 12;
        $data = array(
        	'id_persone' => $id,
        	'matricule' => $matricule,
            'specialite' => $specialite,
            'hopital' => $hopital,

         );
        $this->users_model->set('specialiste',$data);
        
        echo  "specialiste enregistrer avec succes !!!! ";
}

  //save equipement
 public function ajout_equipement()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description'); 
        
        $nom = "moto";
        $date_d_achat = 12/12/2000; 
        $date_expiration = 12/12/2000;
        $etat = "Disponible" ;
        $marque = "sanili" ;
        $couleur = "Rouge";
        $numero_serie = 2000;
        $id_salle = 1;
        $data = array(
		        'nom'=> $nom,
				'date_d_achat' => $date_d_achat,
				'date_expiration' => $date_expiration,
				'etat' => $etat,
                'marque'=> $marque,
				'couleur' => $couleur,
				'numero_de_serie' => $numero_serie,
				'id_salle' => $id_salle,
        );
        $this->users_model->set('equipement',$data);
        
        echo  "equipement enregistrer avec succes !!!! ";
    }


// save caissier
	public function ajout_caissier()
{
	 $id_persone = 12;
        $data = array(
        	'id_personne' => $id_persone,

         );
        $this->users_model->set('caissier',$data);
        
        echo  "caissier enregistrer avec succes !!!! ";
}
 //save patient
	public function ajout_patient()
{  
	    $id_persone = 12;
        $code = "bafia";
        $data = array(
        	'id_persone' => $id_persone,
            'code_patient' => $code,

         );
        $this->users_model->set('patient',$data);
        
        echo  "patient enregistrer avec succes !!!! ";
}

// agenda
public function ajouter_agenda()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description'); 
        
        $annee = 2016;
        $mois = " fevrier"; 
        $jour = "jeudi" ;
        $heure = "2 heures" ;
        $id_specialiste = 7 ;
        $data = array(
		        'annee'=> $annee,
				'mois' => $mois,
				'jour' => $jour,
				'heure' => $heure,
		        'id_specialiste' => $id_specialiste,
        );
        
        $this->users_model->set('agenda',$data);
        
        echo  "agenda enregistrer avec succes !!!! ";
    }

//save hopîtal
	public function ajout_hopital()
{
	    $nom = "hopital general";
        $ville = "bafia"; 
        $pays = "cameroun";
        $data = array(
        	'nom' => $nom,
            'ville' => $ville,
            'pays' => $pays,

         );
        $this->users_model->set('hopital',$data);
        
        echo  "hopîtal enregistrer avec succes !!!! ";
}

//connexion utilisateur
	public function connexion()
{
	    $login = "alama";
        $pass = "hervee"; 
        $role = "Patient";
         $pass=sha1($pass);
        $data = array(
        	'login' => $login,
            'password' => $pass,
            'role' => $role,

         );
        $this->users_model->set('user',$data);
        
        echo  "utilisateur enregistrer avec succes !!!! ";
}
//save salle
	public function ajout_salle()	
{
	    $nom = "conference";
	    $capacite = 23;
        $id_service = 13; 

        $data = array(
        	'nom' => $nom,
        	'capacite' => $capacite,
            'id_service' => $id_service,
         );
        $this->users_model->set('salle',$data);
        
        echo  "salle enregistrer avec succes !!!! ";;
}
//save service
	public function ajout_service()
{      
	    $nom = "Operation";
        $id_hopital = 4; 

        $data = array(
        	'nom' => $nom,
             'id_hopital' => $id_hopital,
         );
        $this->users_model->set('service',$data);
        
        echo  "service enregistrer avec succes !!!! ";
}

//save consultation
public function ajout_consultation()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description'); 
        
        $nom = "Sida";
        $numero = 2000; 
        $prix = 2000;
        $date = 2/12/2000 ;
        $id_agenda = 4 ;
        $id_hopital = 3;
        $id_patient = 3;
        $data = array(
		        'nom'=> $nom,
				'numero' => $numero,
				'date' => $date,
				'prix' => $prix,
                'id_hopital'=> $id_hopital,
				'id_patient' => $id_patient,
				'id_agenda' => $id_agenda,
        );
        $this->users_model->set('consultation',$data);
        
        echo  "consultation enregistrer avec succes !!!! ";
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