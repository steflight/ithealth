<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Name : materiel  manager
 * 
 * version : 1.0
 * 
 * Author : AGOUME KOUFANA INGRID STEPHANE
 * 
 * Location : http://stephaneagoume.com
 * 
 * created : 01/06/2016
 * last update : 15/06/2016
 * 
 * Description : material manager est une librairie qui vous permet de gerer vos stock en toutes simplicité. 
 *               Ainsi , vous n'aurai pas besoins de developper une des fonction d'enregistrement , mais vous pourez , en vous appuyant sur
 *               les fonctions de cette librairie , manipuler votre materiel. vous pourez entre autre realiser des operations :
 *               - d'enregistrement
 *               - de lecture 
 *               - de supression 
 *               - de mise à jour
 *  
 *            la particuarité est que vous aurez access à ces fonctions partout dans votre code , une fois que vous l'aurez charger en autoload .
 * 
 *               
 *                
 * 
 * Requirement : PHP 5 or Above 
 */

class Materiel_manager {
    
    protected $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('mon_model');
    }
    
    /**
     * acquisition
     */
    
    /**
     * liste des materiel, categorie confondu
     */
    public function list_materiel()
    {
        echo "je te teste encore" ;
    }
    
    /**
     * 
     * 
     */
    public function get_list()
    {
       
       $result =  $this->CI->mon_model->get('materiel');
       var_dump($result); // $result->row();
    }
    
    /**
     *detail sur un materiel
     */
    public function detail_materiel()
    {
        
    }  
    
    /**
     * maniement
     */ 
    
    /**
     * permet de recuperer le materiel par utilisateur
     * @param type $id
     */
    public function list_materiel_by_user($id = NULL )
    {
        
    }
   
    
    
    /**
     * sortie
     */
    
    public function test_sortie()
    {
        
    }
    
}
