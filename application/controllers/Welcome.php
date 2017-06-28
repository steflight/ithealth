<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('path');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in())
        {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        
        else 
        {
            $role = $this->ion_auth->user()->row()->role;
            switch ($role)
            {
                case  "directeur" :
                    redirect("acquisition");
                break;
            
                case  "admin" :
                    redirect("auth");
                break;
            
                case  "personnel" :
                    redirect("maniement");
                break;
            }
            
        }
        
    }
        
   
    
    public function test()
    {
        $this->output('test');
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
