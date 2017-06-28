<?php

/**
 * 27/06/2016
 * 
 * Manipulation des materiels ...
 */ 
 

class Materiel
{
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('mon_model');
    }

    public function index()
    {
        echo " j'ai fini les testes ... !!!";
    }
    
   /**
     * recupere la liste du materiel
     * 
     */
    public function get_list()
    {   
       $result =  $this->CI->mon_model->get('materiel');
       return $result;
    }
    
   
    
   /**
    * 
    * @param type $categorie
    */
    public function get_by_category($categorie)
    {
        
    }
    
    /**
     * 
     * @param type $id
     */
    public function get_by_id($id_materiel = NULL)
    {
     //  $id_materiel =  (!empty($this->input->get('id')))? $this->input->get('id') : 123 ;
       // $id_materiel = 26;
         
       $materiel = $this->CI->mon_model->getbyid('materiel',$id_materiel);
       if($materiel == NULL)
       {
           return "existe pas" ;
       }
      // $designation = $materiel->designation;
     //  $materiel->caracteristique = json_decode($materiel->caracteristique);
       $data = array(
           'materiel' => $materiel,
       );
       
       return $materiel;
        
    }
    
    /**
     * 
     * @param type $user
     */
    public function get_by_user($user)
    {
        
    }
    
    /**
     * 
     * @param type $date
     */
    public function get_by_date($date)
    {
        
    }
    
    /**
     * 
     * @param type $cellule
     */
    public function get_by_cellule($cellule)
    {
        
    }
    
    
}