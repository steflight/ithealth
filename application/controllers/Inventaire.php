<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inventaire extends CI_Controller {

	public function __construct()
	{
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');

            $this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
            //$this->load->view('example.php',$output);
            $this->output('example.php',$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	
        public function materiel()
        {
            $crud = new grocery_CRUD();
 
            $crud->set_table('materiel');
            $crud->columns('num_serie','designation','etat');
            $output = $crud->render();

            $this->_example_output($output); 
        }
        
        public function ordre_entree()
        {
            $crud = new grocery_CRUD();
 
            $crud->set_table('entree');
//            $crud->columns('num_serie','designation','etat');
            $output = $crud->render();

            $this->_example_output($output); 
        }
        
    function output($content = null, $data = NULL)
    {
            
            $this->load->view('partial/metadata',$data);
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
        $this->load->view('partial/footer',$data);
        $this->load->view('partial/righthidebar');
        $this->load->view('partial/script');
    }

}