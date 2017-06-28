<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of magazin
 *
 * @author philipien1v21
 */
class magazin extends CI_Controller {
    //put your code here
    public  function index()
    {
        $this->output('stock/main');
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
