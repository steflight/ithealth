<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alienation
 *
 * @author philipien1v21
 */
class alienation extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
         $this->load->library(array('ion_auth','form_validation'));
       $this->load->model('mon_model');
       
       $this->load->library('Datatables');
       $this->load->library('table');
    }
    
    public function index()
    {
        $this->output('alienation/index');
    }
    
    public function liste_materiel()
    {
        $materiel = $this->mon_model->get('materiel');
        
        $data = array(
            "materiels" => $materiel,
        );
        
        return $data;
    }
    
    public function nouvelle_sortie()
    {
       if ($this->encour())
        {
            $message = array(
                'message' => "il y'a un ordre en cour d'edition ",
            );
            $this->session->set_userdata($message);
            $this->sortie_materiel();
        } 
       else
       {
            $data = array(
                'directeur' => 1,
                'code_sortie' => 11111111,
            );
            
          $id_sortie = $this->mon_model->set('sortie',$data);
          
            $data_id = array(
               'id_sortie' => $id_sortie,
           );
           $this->session->set_userdata($data_id);
           $this->sortie_materiel();
       }
        
    }

    public function sortie_materiel()
    {
        
       // $materiel = $this->mon_model->get('materiel');
        //$query = $this->db->query('SELECT * FROM materiel where etat=entrée and  ');
        $materiel = $this->mon_model->getAllbyelement('materiel',array('etat!='=>"sortie"));
        
        $liste_materiel = array(
            "materiels" => $materiel,
        );
        //validate form input
            $this->form_validation->set_rules('designation', 'designation', 'required');
           
            if($this->form_validation->run() == true)
            {
                $id_sortie = $this->session->userdata('id_sortie');  
                
                $continuez = $this->input->post('continuez');
                
                $id_materiel = $this->input->post('designation');
                $motif = $this->input->post('motif');
                $mode = $this->input->post('mode');
                
                $num_serie = $this->input->post('num_serie');
                $categorie = $this->input->post('categorie');
                
                $data = array(
                    'id_materiel' => $id_materiel,
                    'id_sortie' => $id_sortie,
                    'motif' => $motif,
                    'mode' => $mode,
                );
                
               
                // mise à jour etat materiel ...
                
                $this->mon_model->updates('materiel',array('etat'=>"sortie"),array("id"=>$id_materiel));
          
                $this->mon_model->set('sortie_materiel',$data);
                
                if($continuez != "non")
                {
                    $this->output('alienation/nouvelle_sortie',$liste_materiel);
                }
                else
                {
                    $this->session->unset_userdata('id_sortie');
                    redirect('alienation');
                }
            }
            else
            {
                $this->output('alienation/nouvelle_sortie',$liste_materiel);
            }
    }

    public function encour()
    {
        
        if($this->session->userdata('id_sortie') == !null)
        {
            return TRUE;
        }
        else
        {
            return  FALSE;
        }
    }
    
    public function liste_sortie()
    {
        
    }
    
   public function detail_ordre()
    {
        $id_ordre =  (!empty($this->input->get('id')))? $this->input->get('id') : 1 ;
        
        $data_o = array(
           "id" => $id_ordre,
        );
        
        $data_sortie = array(
           "id_sortie" => $id_ordre,
        );
        
       $sortie_par_ordre = $this->mon_model->getbyid('sortie',$id_ordre);
       
       $sortie_materiel = $this->mon_model->getAllbyelement('sortie_materiel',$data_sortie);
       
        $data = array(
            'sortie_par_ordre' =>$sortie_par_ordre,
            'liste_sortie' => $sortie_materiel,
        );
       
       $this->output('alienation/detail_ordre_sortie',$data); 
    }
    
    public function liste_materiel_sortie()
    {
       
       $entree_mat =  $this->mon_model->get('sortie_materiel');
       
       $data = array(
           
           "sortie_materiel" => $entree_mat,
       
       );
      $this->output('alienation/sortie_materiel',$data);
    }
        
    public function liste_ordre_sortie()
    {
        $entree =  $this->mon_model->get('sortie');
        
        $data = array(
            'entree' => $entree,
        );
        
       $this->output('alienation/liste_sortie',$data);
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
