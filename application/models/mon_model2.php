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
    }



    public function set($table,$data)
    {
        //$table = "chambre";
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function edit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }
    
    
    public function updates($table,$data,$data_where)
    {
        $this->db->where($data_where);
        $this->db->update($table, $data);
    }

    public function get($table)
    {
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




    public function update()
    {

    }
}