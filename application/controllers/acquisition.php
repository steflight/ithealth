<?php


/**
 * Description of acquisition
 *
 * @author philipien1v21
 */
class acquisition  extends CI_Controller
{
    
    public $entre_ouvert = false;

    public function __construct() 
    {
        parent::__construct();
        
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->model('mon_model');
        
        $this->load->library('Datatables');
        $this->load->library('table');
        
        $data = array(
            'entree_ouvert' => 0,
        );
        
        $this->session->set_userdata($data);
    }
    
    public function index()
    {
        $this->output('acquisition/main');
    }
    
    
    public function ajax()
    {
        
        $action = ($this->input->get('groupe')!= null)?$this->input->get('groupe'):$this->input->post('action');
        
        $action = (empty($action))?$this->input->get('designation'):$action;
         
        // $action = $this->input->get('designation');
        
        /*
         * Etant donné qu'on reponds TOUJOURS en json
         **/
        
        header('Content-type: application/json');
        
        switch ($action)
        {
            
            // Je sais pas moi, tu pourras change
            //le nom ci plus tard!
            case 'informatique':
            
                $form = $this->load->view("acquisition/informatique/entree_personalisee",null,true);
//                
                echo json_encode($form );
                break;
            case 'bureau':
                $form = $this->load->view("acquisition/bureau/entree_personalisee",null,true);
              //  echo json_encode( array('Table', 'chaise', 'fauteuil') );
                echo json_encode($form );
                break;
            case 'automobile':
                $form = $this->load->view("acquisition/automobile/entree_personalisee",null,true);
              //  echo json_encode( array('mercedes', 'lamborguini', 'mac lauren') );
                echo json_encode($form );
                break;
            case 'enregistrer':
                $this->set_entree_materiel();
               // $form = $this->load->view("acquisition/succes",null,true);
                echo json_encode( array('mercedes', 'lamborguini', 'mac lauren') );
              //  echo json_encode($form);
                break;
            
            // traitemet des caracteristiques 
            
            case "ordinateur":
                    $form = $this->load->view("acquisition/informatique/ordinateur",null,true);
                    echo json_encode($form);
                break;
            
            case "imprimante":
                    $form = $this->load->view("acquisition/informatique/imprimante",null,true);
                    echo json_encode($form );
                break;
            
            default:
                break;
        }
    }
    
    /**
     * gestion des inventaires 
     */
    
  
    public function pagination($table,$url = NULL)
    {
        $this->load->library('pagination');
        $config['total_rows'] = $this->db->get($table)->num_rows();
        $config['base_url'] = $url;
        $this->pagination->initialize($config); 
        $pagination =  $this->pagination->create_links();
        return $pagination;
    }
    
    public function inventaire($offset = NULL)
    {
        // definition de la pagination
        $this->load->library('pagination');
        $config['total_rows'] = $this->db->get('materiel')->num_rows();
        $config['base_url'] = 'http://localhost/sygepa/index.php/acquisition/inventaire';
        $this->pagination->initialize($config); 
        $pagination =  $this->pagination->create_links();
     
       // $field_where = array("supprime"=>"0");
        $this->db->order_by('date_creation', 'DESC');
        $materiel = $this->db->get_where('materiel',array("supprime"=>"0"),5,$offset)->result();
      //  $materiel = $this->mon_model->get('materiel','date_creation','DESC',$field_where);
      
        $data = array(
            "materiel" => $materiel,
            "pagination" => explode('&nbsp;',$pagination)
        );
        $this->output('acquisition/liste_materiel',$data);
    }
    
    /**
     * inventaire avance ... affichage par categories
     */
    public function inventaire_avance()
    {
        $field_where = array("supprime"=>"0");
        $materiel = $this->mon_model->get('materiel','date_creation','DESC',$field_where);
        
        $categorie = array("materiel de bureau","automobile","informatique");
        
        foreach ($materiel as $mat) 
        {
            switch ($mat->categorie)
            { 
                case "mobilier de bureau":
                    $data["bureau"][] = $mat;
                break;
            
                case "parc automobile":
                    $data["automobile"][]= $mat;
                break;
            
                case "parc informatique et bureautique":
                        $data["informatique"][]= $mat;
                break;
                
                default :
                    
                break;
            }
            
        }
        
        $response = array(
            "materiel" => $data,
        );
        
        $this->output('acquisition/liste_materiel_avance',$response);
        
    
    }
    

    public function corbeille()
    {
        $field_where = array("supprime"=>"1");
        $materiel = $this->mon_model->get('materiel','date_creation','DESC',$field_where);
      
        $data = array(
            "materiel" => $materiel,
        );
        $this->output('acquisition/liste_materiel',$data);
    }
    
    public function inventaire_json()
    {
        $materiel = $this->mon_model->get('materiel');
        
        $materiels = json_encode($materiel);
        echo $materiels;
    }
    
    public function liste_materiel()
    {
        $materiel = $this->mon_model->get('materiel');
        
        $data = array(
            "materiels" => $materiel,
        );
        
        $this->output("alienation/nouvelle_sortie",$data);
    }
      
    /**
     * manque le controle admin ...
     */
    
   
    public function nouvelle_entree()
    {
        
       if ($this->encour())
        {
            $message = array(
                'message' => "il y'a un ordre en cour d'edition ",
            );
            $this->session->set_userdata($message);
            $this->entree_materiel();
        } 
        
        else
        {
            $message = array(
                'message' => "vous venez d'ouvrir un ordre d'entrée ",
            );
            
           $this->session->set_userdata($message);
           $code = "111222333";
           $user = $this->ion_auth->user()->row()->id;
          // $user = 2;

            $data = array(
                             'code_entree' => $code,
                             'user' => $user,
            );

           $id_entree =  $this->mon_model->set('entree',$data);
           
           
           $data = array(
               'id_entree' => $id_entree,
           );
           
           $this->session->set_userdata($data);
           $this->entree_materiel();
        }
      
      
    }

    
    public function set_entree()
    {
        $data_mat = array(
                    'designation' => $designation,
                    'caracteristique' => $caracteristique,
                    'num_serie' => $num_serie,
                );
          
        $this->mon_model->set('entree_materiel',$data);
    }
    
    public function set_materiel()
    {
        $this->session->unset_userdata('id_entree');
    }
    
    public function set_entree_imprimante()
    {
        $id_entree = $this->session->userdata('id_entree');
            
        $model = $groupe = $this->input->post('model');
        $type_format = $groupe = $this->input->post('type_format');
        $type_couleur = $groupe = $this->input->post('type_couleur');
        $marque = $groupe = $this->input->post('marque');
           
        $designation = $groupe = $this->input->post('designation');
        $numero_serie = $groupe = $this->input->post('numero_serie');
        $groupe = $groupe = $this->input->post('groupe');
        
                $caracteristiques = array(
                
                 'model'=>$model,
                 'type_format'=>$type_format,
                 'type_couleur'=>$type_couleur,
                 'marque'=>$marque,
                );
                
        $caracteristique = json_encode($caracteristiques);

             
       // $continuez = $this->input->post('continuez');
             
        // préparation et chargement des données
               
                $data = array(
                    'designation' => $designation,
                    'caracteristique' => $caracteristique,
                    'id_entree' => $id_entree,
                );
                
                $data_mat = array(
                    'designation' => $designation,
                    'categorie' => $groupe,
                    'caracteristique' => $caracteristique,
                    'num_serie' => $numero_serie,
                );
                
               //  enregistrement des données
                
                $this->mon_model->set('entree_materiel',$data);
                
                $this->mon_model->set('materiel',$data_mat);
       
                
        echo json_encode("fonction test");
    }
   
    
    /**
     * la modification du materiel se fait au niveau de la table 
     * Materiel et on met à egalement l'entré de ce materiel à jour dans l'ordre d'entrée 
     * cependant , nous garderons l'ancienne version modifier du materiel , afin de permettre une traçabilité
     * sur les modifications
     */
    
    
    public function modifier()
    {
        $this->form_validation->set_rules('designation', 'designation', 'required');
        $this->form_validation->set_rules('caracteristique', 'caracteristique', 'required');
            
            if($this->form_validation->run() == true)
            {
                $this->edit_materiel();
            }
            else{
                
            }
    }




    public function edit_materiel()
    {
        /**
         * @var type id ordre d'entrée
         */
        $id_entree = 175;
        
        /**
         * @var integer id du materiel
         */
        $id_materiel =  $this->input->post('id') ;
       
    // $id_materiel =  "27" ;
        
        
        /**
         * données des input post
         */
        
     //   $designation = $groupe = $this->input->post('designation');
        $designation = "ordinateur";
        
        $numero_serie = $groupe = $this->input->post('numero_serie');
//        $groupe = $groupe = $this->input->post('groupe');
        /**
         * données de tests
         */
        
       // $designation = "ordi perso";
       // $numero_serie = $groupe = "11111111111";
        $groupe = $groupe = "ordinateurs de bureau";

        $caracteristiques = null;
        
       // $continuez = $this->input->post('continuez');
        
        switch ($designation)
        {
            case "ordinateur":
                $caracteristiques = array(
               
                 'marque'=>$this->input->post('marque'),
                 'type'=>$this->input->post('type'),
                 'marque_processeur'=>$this->input->post('marque_processeur'),
                 'frequence'=>$this->input->post('frequence'),
                 'ram'=>$this->input->post('ram'),
                 'disque_dur'=>$this->input->post('disque_dur'),
                 'num_serie_moniteur'=>$this->input->post('num_serie_moniteur'),
                 'marque_moniteur'=>$this->input->post('marque_moniteur'),
                    
//                 'marque'=>"HP pavillon",
//                 'type'=>"Laptop",
//                 'marque_processeur'=>"intel core i3",
//                 'frequence'=>"2.75 * 3",
//                 'ram'=>"4 GB",
//                 'disque_dur'=>"500 GB",
//                 'num_serie_moniteur'=>"",
//                 'marque_moniteur'=>"",
                 
                );
                break;
            case "imprimante":
                
                $model = $groupe = $this->input->post('model');
                $type_format = $groupe = $this->input->post('type_format');
                $type_couleur = $groupe = $this->input->post('type_couleur');
                $marque = $groupe = $this->input->post('marque');
        
                $caracteristiques = array(
                
                 'model'=>$model,
                 'type_format'=>$type_format,
                 'type_couleur'=>$type_couleur,
                 'marque'=>$marque,
                );
                break;
        }
       
        $caracteristique = json_encode($caracteristiques);
                   
        // préparation et chargement des données
               
                $data = array(
                    'designation' => $designation,
                    'caracteristique' => $caracteristique,
                    'id_entree' => $id_entree,
                );
                
                $data_mat = array(
                    'designation' => $designation,
                    'categorie' => $groupe,
                    'caracteristique' => $caracteristique,
                    'num_serie' => $numero_serie,
                );
                
        // enregistrement des données
                
                $this->mon_model->edit('entree_materiel',$data,$id_entree);
                
                $this->mon_model->edit('materiel',$data_mat,$id_materiel);
                
                //$reponse = array("reponse"=>"http://localhost/sygepa/index.php/acquisition/detail_materiel?id=$id_materiel");
                $reponse = array("reponse"=>"cdcdv");
                echo json_encode($reponse);
                
    }

    public function set_entree_materiele()
    {
        echo "cool";
    }

     public function set_entree_materielx(){
         
        $id_entree = $this->session->userdata('id_entree');
        $designation  = $this->input->post('designation');
        $groupe  = $this->input->post('groupe');
        $caracteristiques = null;
        $continuez = $this->input->post('continuez');
        
        switch ($designation)
        {
            
            case "automobile":
            $rep = array('reponse'=>"c est vrai");
                echo json_encode($rep);
            break;
        }
     }
     
    public function set_entree_materiel()
    {
        $id_entree = $this->session->userdata('id_entree');
        $numero_serie  = $this->input->post('numero_serie');
        $designation  = $this->input->post('designation');
        
        
       
        
        $groupe  = null;
        
        $caracteristiques = null;
        
        $continuez = $this->input->post('continuez');
        
        switch ($designation)
        {
            case "ordinateur":
                $numero_serie  = $this->input->post('numero_serie');
                $designation  = $this->input->post('designation');
                $groupe  = $this->input->post('groupe');
                $caracteristiques = array(
               
                'marque'=>$this->input->post('marque'),
                'type'=>$this->input->post('type'),
                'marque_processeur'=>$this->input->post('marque_processeur'),
                'frequence'=>$this->input->post('frequence'),
                'ram'=>$this->input->post('ram'),
                'disque_dur'=>$this->input->post('disque_dur'),
                'num_serie_moniteur'=>$this->input->post('num_serie_moniteur'),
                'marque_moniteur'=>$this->input->post('marque_moniteur'),
                 
                );
                break;
            case "imprimante":
                $numero_serie  = $this->input->post('numero_serie');
                //$groupe = ""
                $model  = $this->input->post('model');
                $type_format = $this->input->post('type_format');
                $type_couleur  = $this->input->post('type_couleur');
                $marque =  $this->input->post('marque');
        
                $caracteristiques = array(
                
                 'model'=>$model,
                 'type_format'=>$type_format,
                 'type_couleur'=>$type_couleur,
                 'marque'=>$marque,
                );
                break;
            
            case "automobile":
                
                $designation  = $this->input->post('designation');
                $numero_serie = $this->input->post('numero_serie'); // c'est le numero de chassi
                $groupe = "Parc automobile";
                $marque = $this->input->post('marque');
                
                $num_chassi = $this->input->post('num_chassi'); // c'est le numero de chassi
                $vitesse = $this->input->post('vitesse');
                $nbr_place = $this->input->post('nbr_place');
                $type_moteur = $this->input->post('type_moteur');
                $couleur = $this->input->post('couleur');
                
                $caracteristiques = array(
                
                 'marque'=>$marque,
                 'num_chassi'=>$num_chassi,
                 'vitesse'=>$vitesse,
                 'nbr_place'=>$nbr_place,
                 'type_moteur'=>$type_moteur,
                 'couleur'=>$couleur,
                );
            break;
        
            case "scanner":
                
            break;
            case "bureau":
                
                $designation  = $this->input->post('designation');
                $numero_serie = $this->input->post('numero_serie'); // c'est le numero de chassi
                $groupe = "materiel de bureau";
                
                
                $fabriquant  = $this->input->post('fabriquant');
                
                $nbr_place = $this->input->post('nbr_place');
                $type = $this->input->post('type');
                $description = $this->input->post('description');
                
                $caracteristiques = array(
                 'nbr_place'=> $nbr_place,
                 'type'=> $type,
                 'description'=> $description,
                 'fabriquant'=> $fabriquant,
                );
            break;
        
        }
       
        /*
         *  demande de confirmation d'enregistrement
         * 
         * il est question de presenter à l'utilisateurs les données qu'il a enregistrer pour
         * confirmation ... ceci permet d'eviter des erreurs de frappe et autres ...
         * 
         * je compte faire une fonction qui affiche les données entrée dans une formulaire comme celui de 
         * modif et conserver le meme nom des variables ....
         */
        
        $data_confirm = array(
            
        "designation"  => $this->input->post('designation'),
        "numero_serie"  => $this->input->post('numero_serie'),
        "groupe"  => $this->input->post('groupe'),
        "caracteristique"  => $caracteristiques
        );
        
                   
        // préparation et chargement des données
        $caracteristique = json_encode($caracteristiques);
               
                $data = array(
                    'designation' => $designation,
                    'caracteristique' => $caracteristique,
                    'id_entree' => $id_entree,
                );
                
                $data_mat = array(
                    'designation' => $designation,
                    'categorie' => $groupe,
                    'caracteristique' => $caracteristique,
                    'num_serie' => $numero_serie,
                );
                
        // enregistrement des données
                
                $this->mon_model->set('entree_materiel',$data);
               
                $this->mon_model->set('materiel',$data_mat);
                
                if($continuez == "non")
                {
                    $this->session->unset_userdata('id_entree');
                    $reponse = array("reponse"=>"http://localhost/sygepa/index.php/acquisition/");
                    echo json_encode($reponse);
                    exit();
                }
                
                $reponse = array("reponse"=>"http://localhost/sygepa/index.php/acquisition/nouvelle_entree");
               // $reponse = array("reponse"=>"dfdvfvvvf");
                echo json_encode($reponse);        
    }

    public function entree_materiel()
    {
        // preparation de l'interface (les selects , les données predefinies)
        
        $groupe = $this->mon_model->get('groupe_mat');       
        $designation = $this->mon_model->get('categorie_mat');
         
        $data = array(
                     "designation" => $designation,
                     "groupe" => $groupe,
                    );
                                               
        //validation des formulaires
                
            $this->form_validation->set_rules('designation', 'designation', 'required');
            $this->form_validation->set_rules('caracteristique', 'caracteristique', 'required');
            
            if($this->form_validation->run() == true)
            {
                $id_entree = $this->session->userdata('id_entree');  
                $continuez = $this->input->post('continuez');  
                $designation = $this->input->post('designation');
                $groupe = $this->input->post('groupe');
                $caracteristique = $this->input->post('caracteristique');
                $num_serie = $this->input->post('num_serie');
                  
        // preparation des données pour l'enregistrement
                
                $data = array(
                    'designation' => $designation,
                    'caracteristique' => $caracteristique,
                    'id_entree' => $id_entree,
                );
                
                $data_mat = array(
                    'designation' => $designation,
                    'categorie' => $groupe,
                    'caracteristique' => $caracteristique,
                    'num_serie' => $num_serie,
                );
                
        // Demande de confirmation 

        // Enregistrement   
                
                $this->mon_model->set('entree_materiel',$data);
                
                $this->mon_model->set('materiel',$data_mat);
                
                if($continuez != "non")
                {
                    $groupe = $this->mon_model->get('groupe_mat');
                
                    $designation = $this->mon_model->get('categorie_mat');
                    $data = array(
                     "designation" => $designation,
                     "groupe" => $groupe,
                    );
                    
                    $this->output('acquisition/nouvelle_entree',$data);
                }
                else
                {
                    // destruction de l'id de l'ordre d'entrée en cours 
                    $this->session->unset_userdata('id_entree');
                    redirect('acquisition/liste_ordre_entree');
                }
            }
            else
            {
                $groupe = $this->mon_model->get('groupe_mat');
                
                $designation = $this->mon_model->get('categorie_mat');
        
                    $data = array(
                     "designation" => $designation,
                     "groupe" => $groupe,
                    );
                $this->output('acquisition/nouvelle_entree',$data);
            }
    }

    /**
     * avec gestion d'exeption .. faut verifier l'id passé en parametre existe
     */
    public function delete()
    {
        $id =  $this->input->get('id') ;
        $data = array('supprime'=>1);
        $data_where = array('id'=>$id);
        $this->mon_model->delete('materiel',$data,$data_where);
        $reponse = array("rapport"=>"le materiel a ete supprimé avec succès");
        redirect('acquisition/inventaire');
      //echo json_encode($reponse);
    }
    
    public function encour()
    {
        
        if($this->session->userdata('id_entree') == !null)
        {
            return TRUE;
        }
        else
        {
            return  FALSE;
        }
    }
    
    /**
     * liste des materiels reliés à leur ordre d'entree respectifs 
     */
    
    public function liste_materiel_entree()
    {
       
       $entree_mat =  $this->mon_model->get('entree_materiel');
       
       $data = array(
           
           "entree_materiel" => $entree_mat,
          
       );
      $this->output('acquisition/entree_materiel',$data);
    }
    
    public function liste_ordre_entree($offset = NULL)
    {
        $this->db->limit(5);
        $this->db->offset($offset);
        $entree =  $this->mon_model->get('entree');
        
        $data = array(
            'entree' => $entree,
            "pagination" => explode('&nbsp;',  $this->pagination('entree','http://localhost/sygepa/index.php/acquisition/liste_ordre_entree'))
        );
        
        $this->output('acquisition/liste_entree',$data);
    }
    
    public function detail_ordre()
    {
        $id_ordre =  (!empty($this->input->get('id')))? $this->input->get('id') : 1 ;
        
        $data_o = array(
           "id" => $id_ordre,
        );
        
        $data_entre = array(
           "id_entree" => $id_ordre,
        );
        
       $entree_par_ordre = $this->mon_model->getbyid('entree',$id_ordre);
       
       $entree_materiel = $this->mon_model->getAllbyelement('entree_materiel',$data_entre);
       
        $data = array(
            'entree_par_ordre' => $entree_par_ordre,
            'liste_entre' => $entree_materiel,
        );
       
       $this->output('acquisition/detail_ordre_entree',$data); 
    }
    
    
    public function detail_materiel()
    {
       $id_materiel =  (!empty($this->input->get('id')))? $this->input->get('id') : 123 ;
        
       $materiel = $this->mon_model->getbyid('materiel',$id_materiel);
       $designation = $materiel->designation;
       $materiel->caracteristique = json_decode($materiel->caracteristique);
       $data = array(
           'materiel' => $materiel,
       );
       
       switch ($designation)
       {
           case "bureau":
               $this->output('acquisition/bureau/detail_materiel',$data);
               break;
           case "automobile":
               $this->output('acquisition/automobile/detail_materiel',$data);
               break;
           case "ordinateur":
               $this->output('acquisition/informatique/detail_materiel',$data);
               break;
           case "imprimante":
               $this->output('acquisition/informatique/detail_materiel',$data);
               break;
           default:
               break;
       }
    }
    
    /**
     * @var id
     * permet de modifier le materiel dont l'id est passé en param
     */
    
    public function detail_materiel_modif()
    {
       $id_materiel =  (!empty($this->input->get('id')))? $this->input->get('id') : 1 ;
        
       $materiel = $this->mon_model->getbyid('materiel',$id_materiel);
       $designation = $materiel->designation;
       $materiel->caracteristique = json_decode($materiel->caracteristique);
       $data = array(
           'materiel' => $materiel,
       );
       
       switch ($designation)
       {
           case "bureau":
               $this->output('acquisition/bureau/detail_materiel_modification',$data);
               break;
           case "automobile":
               $this->output('acquisition/automobile/detail_materiel_modification',$data);
               break;
           case "ordinateur":
               $this->output('acquisition/informatique/detail_materiel_modification',$data);
               break;
           case "imprimante":
               $this->output('acquisition/informatique/detail_materiel_modification',$data);
               break;
           default:
               break;
       }
       
      
    }
    
    public function detail_materiel_json()
    {
       $id_materiel =  (!empty($this->input->get('id')))? $this->input->get('id') : 1 ;
        
       $materiel = $this->mon_model->getbyid('materiel',$id_materiel);
       $materiel->caracteristique = json_decode($materiel->caracteristique);
       
      // $caracteristique = json_encode($materiel->caracteristique);
       
       echo json_encode($materiel);
        
    }
  
    
    /**
     * after entree 
     * mise à jour des stocks
     * cette fonction doit gerer 
     * - cas d'entre : ajouter
     * - cas de sortie: enlever
     * - cas de maniement : signaler la presence mais aussi le deplacement
     */
    
    public function mise_a_jour_stock()
    {
        
    }
    
    /** 
     *  fin des traitements d'apres entrée
     */

    
    public function choix_formulaire()
    {
        $groupe = $this->input->get('groupe');
        switch ($groupe)
        {
               
            case "bureau":
                $bureau = $this->load->view('acquisition/bureau/entree_personalisee',null,true);
                $this->output->set_content_type('application/json');
                        echo json_encode($bureau);
                
            case "automobile":
                $data["model"] = array('mercedes','lamborguini','...');
                
                $this->load->view('acquisition/automobile/entree_personalisee',$data);
                break;
            
        }      
    }
    
    /**
     * permet d'effectuer un filtre
     * 
     * @param type $table
     * @param type $column
     * @param type $motif
     */
    public function search($table = null,$column = null,$motif = NULL)
    {
       // $table = $this->input->get('table');
       // $column = $this->input->get('column');
        $motif_designation = $this->input->get('designation');
        $motif_caracteristique = $this->input->get('caracteristique');
        $motif_numero = $this->input->get('numero_serie');
        $motif_categorie = $this->input->get('categorie');
        
        $table = "materiel";
        $column = "caracteristique"; $motif= "zzzzzzzzzzzzza";
        $column2 = "designation"; $motif2= "zzzzzzza";
        
        $caracteristiques = array(
            'caracteristique' => $motif_caracteristique,
            'categorie' => $motif_categorie,
            'designation' => $motif_designation,
            'num_serie' => $motif_numero,
            'etat' => 'entree',
        );
        
        foreach ($caracteristiques as $key => $value)
        {
            if(!empty($value))
            {
              $this->db->like($key, $value);  
            }  
        }
       
        $query = $this->db->get($table);
        $nbr = $query->num_rows();
        $resultat = $query->result();
        
        $data = array(
            "nbr"=>$nbr,
            "materiel"=>$resultat,
        );
        
       // $this->output('acquisition/liste_materiel',$data);
        $this->load->view('acquisition/liste_materiel',$data);
          
    }
    
    public function searchs($motif = 'cameroun',$table = null)
    {
        $table_allowed = array('materiel');
        $motif = $this->input->get('motif');
        $table = $this->input->get('table');
        
    // recuperation des tables
        if($table != ""){
            
        }
        else{
            // $table_names = $this->db->list_tables();
             $table_names = array("materiel");
             var_dump($table_names);
        foreach($table_names as $table_name)
        {
            $table_columns = $this->db->list_fields($table_name);
            
            foreach($table_columns as $key => $table_column)
            {
                $this->db->like($table_column, $motif);
                $query = $this->db->get($table_name);
                $nbr = $query->num_rows();
                $resultat = $query->result();

                $data['resultat'] = $resultat;
                if(($nbr != 0) &&(in_array($table_name,$table_allowed)))
                {
                    switch($table_name)
                    {
                        case 'materiel':
                        {
                            echo "vous avez trouvé $nbr materiels  : <br>";
                            foreach($resultat as $chambre)
                            {
                               
                            }
                           
                            break;
                        }
                        
                    }
                }
                    echo "table :".$table_name."<br>";
                    echo "column :".$table_column."<br>";
                    echo "motif de recherche :".$motif."<br>";
                    echo "nombre de resultat :".$nbr."<br>";

                    echo "<hr>";
                
        }
      }
    }
       
        
    }
            
    function output($content = null, $data = NULL)
    {
            
            $this->load->view('partial/metadata');
            $this->load->view('partial/header');
            $role = $this->ion_auth->user()->row()->role;
            switch ($role)
            {
                case  "directeur" :
                     $this->load->view('partial/leftbar_directeur');
                break;
            
                case  "admin" :
                     $this->load->view('partial/leftbar_admin');
                break;
            
                case  "personnel" :
                     $this->load->view('partial/leftbar_personnel');
                break;
            }
        
            //$this->load->view('partial/leftbar');
            $this->load->view('partial/precontent');
            if(empty($content))
            {
                $this->load->view('partial/content');
            } 
            else
            {
                $this->load->view($content,$data);
            }
        $this->load->view('partial/postcontent');
        $this->load->view('partial/footer');
        $this->load->view('partial/righthidebar');
        $this->load->view('partial/script');
    }
}
