<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reglage
 *
 * @author philipien1v21
 */
class reglage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mon_model');
    }
    
    
    public function index()
    {
       // $this->output('reglages/index');
        //$this->output("acquisition/nouvelle_ entree_materiel");
        $this->output("acquisition/nouvelle_demande_materiel");
    }
    
    /**
     * reglage ressources humaines
     * ce module permet de parametrer les utilisateurs du systeme
     * V 1.0 
     */
    
    /*
     * Definir 
     */
    public function set_directeur()
    {
        $this->output('acquisition/nouvelle_sortie_materiel');
    }
    
    public function set_comptable()
    {
        
    }
    
    public function set_daaf()
    {
        
    }

    

    /**
     * Reglage categorie
     */
     
     
    public function ajouter_categorie_materiel()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description');
        
        $intitule = "vivres";
        $numero = "1"; 
        
        $data = array(
            'intitule' => $intitule,
            'numero_nomenclature' => $numero,
        );
        
        $this->mon_model->set('categorie_mat',$data);
        
        return "numero de nomenclature enregistrer avec succes !!!! ";
        
    }
    
    public function lire_categorie()
    {
        
    }
    
    /** 
     * reglage nomenclature
     * 
     */
    public function ajouter_num_nomenclature()
    {
//        $intitule = $this->input->post('intitule');
//        $description = $this->input->post('description');
        
        $intitule = "numero trois";
        $description = " pour les civils ..."; 
        
        $data = array(
            'intitule' => $intitule,
            'description' => $description,
        );
        
        $this->mon_model->set('numero_nomenclature',$data);
        
        return "numero de nomenclature enregistrer avec succes !!!! ";
        
    }
    
    public function lire_numero_nomenclature()
    {
        
    }
    
    public function get_designation()
    {
        $designation = $this->mon_model->get('p_designation');
        
        $data = array(
            "designation" => $designation,
        );
        
        return $data;
    }
   
            
    function output($content = null, $data = NULL)
    {
            
            $this->load->view('partial/metadata');
            $this->load->view('partial/header');
            $this->load->view('partial/leftbar');
            $this->load->view('partial/precontent');
            if(empty($content))
            {
                $this->load->view('partial/content');
            } 
            else
            {
                $this->load->view($content);
            }
        $this->load->view('partial/postcontent');
        $this->load->view('partial/footer');
        $this->load->view('partial/righthidebar');
        $this->load->view('partial/script');
    }
}
