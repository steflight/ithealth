<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 17:11
 */

/**
 *  Bibliotheque de gestion 
 * de la base de données 
 * V 1.5
 * 03/10/2015
 */


class mon_model extends CI_Model
{
    private $table;
    public function __construct()
    {
        $this->table = "chambre";
	protected $special = 'specialiste';
	protected $personne='personne';
	protected $caissier='caissier';
	protected $patient = 'patient';
	protected $hopital = 'hopital';
	protected $service = 'service';
	protected $salle = 'salle';
	protected $equipement = 'equipement';
	protected $agenda = 'agenda';
	protected $consultation = 'consultation';
    protected $user = 'user';
    }

    public function set($table,$data)
    {
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    /**
     * @description : when 'id' is the attribute condition is based on
     * you can use this when your table content an attribute witch name is "id"
     * 
     * otherwise just use the "updates" function  , witch is more flexible
     * @param type $table
     * @param type $data
     * @param type $id
     */
    
    public function edit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }
    
    /**
     * 
     * @param type $table : the concerned table
     * @param type $data  : set the new data , into an array 
     * @param type $data_where :  specify the condition of edit 
     * exemple $data_where = array("nom"=>"Léana")
     */
	 
	
	/* *	Ajoute une news
	 *
	 *	@param string $auteur 	L'auteur de la news
	 *	@param string $titre 	Le titre de la news
	 *	@param string $contenu 	Le contenu de la news
	 *	@return bool		Le résultat de la requête
	 */
	
// liste des specialiste
	function get_all_specialiste(){
$this->db->select('*');
$this->db->from('personne as per');
$this->db->join('specialiste as spl', 'per.id = spl.id_persone');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}

// liste des caissiesr
	function get_all_caissier(){
$this->db->select('*');
$this->db->from('personne as per');
$this->db->join('caissier as cai', 'per.id = cai.id_personne');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}

// liste des specialiste
	function get_all_equipement(){
$this->db->select('*');
$this->db->from('equipement as eqp');
$this->db->join('salle as sal', 'eqp.id_salle = sal.id');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}

// liste des specialiste par hopital large
	function get_all_specialiste_large(){
$this->db->select('*');
$this->db->from('hopital as hpt');
$this->db->join('specialiste as spl','hpt.nom = spl.hopital');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}
// liste des specialiste par hopital
function get_all_specialist_hopital(){
$this->db->select('*');
$this->db->from('personne as per');
$this->db->join('specialiste as spl', 'per.id = spl.id_persone');
$this->db->join('hopital as hpt', 'hpt.nom = spl.hopital');
//$this->db->order_by('hpt.nom','nom hopital');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}

// liste des consultations
function get_all_consultation(){
$this->db->select('*');
$this->db->from('consultation as consul');
$this->db->join('agenda as ag', 'ag.id = consul.id_agenda');
$this->db->join('hopital as hpt', 'hpt.id = consul.id_hopital');
$this->db->join('patient as pt', 'pt.id = consul.id_patient');
//$this->db->order_by('hpt.nom','nom hopital');
$query = $this->db->get();
if($query->num_rows() >0)
{
foreach ($query->result() as $row)
{
$data[] = $row;
}
return $data;
};

}
// supprimer un RDV ou consultation

public function supprimer_rdv($id)
{
	return $this->db->where('id', $id)
			->delete($this->consultation);
}

// supprimer un equipement

public function supprimer_equipement($id)
{
	return $this->db->where('id', $id)
			->delete($this->equipement);
}
	
	public function editer_equipement($id, $data)
{
	
	$this->db->where('id', $id);
	
	return $this->db->update($this->equipement, $data);
}

    public function updates($table,$data,$data_where)
    {
        $this->db->where($data_where);
        $this->db->update($table, $data);
    }
    
    /**
     *  mise à jour 02/02/2016
     *  @var field_order permet de definir l'attribut sur lequel une condition d'ordre existe
     *  @var order permet de definir le type d'ordre 
     * exemple get($table,'date_','ASC');  
     */

    public function get($table,$field_order = NULL,$order = NULL,$field_where = NULL)
    {
        // test s'il y'a une sur l'ordre
        
        if(($field_order != NULL)&&($order != NULL)){
           $this->db->order_by($field_order, $order); 
        }
        
        // test s'il y'a une condition sur Where 
        
        if($field_where != NULL){
           $this->db->where($field_where);  
        }
      
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getbyid($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id' => $id), $limit, $offset);
        return $query->row();
    }
    
    /*
     * j'appelle ce concept scène de ménage , ou guere des roles
     * parfois faire des chose dans une incompletude est benefique pour la personne qui doit continuer avec
     */
    
    public function getbyidinc($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id' => $id), $limit, $offset);
        return $query;
    }

    public function getbyid_chambre($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id_chambre' => $id), $limit, $offset);
        return $query->row();
    }

    /**
     * get the asking element in parameter array ( we can call data_where)
     * @param type $table
     * @param type $data_where
     * @return type
     */
    public function getbyelement($table,$data_where)
    {
        $query = $this->db->get_where($table, $data_where);
        return $query->row();
    }

    public function getAllbyelement($table,$data_where)
    {
        $query = $this->db->get_where($table, $data_where);
        return $query->result();
    }

    public function getAllelementwithrelation()
    {
        $this->db->select('*');
        $this->db->from('photo');
        $this->db->join('chambre', 'chambre.id = photo.id_chambre');
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * @param int $id
     * @param array $photo
     * @return array
     */
    public function get_photo($id = null,$photo = null)
    {
        $id = 31;
        $photo = $this->chambre->getAllbyelement('photo',array('id_chambre'=>$id));
        return $photo;
    }

    /**
     * code portion of delete
     * NB : Never delete data from database
     */
    
    /**
     * 
     * @param type $table
     * @param type $id
     */
    
    public function delete($table,$data,$data_where)
    {
        $this->updates($table, $data, $data_where);
    }



   
}