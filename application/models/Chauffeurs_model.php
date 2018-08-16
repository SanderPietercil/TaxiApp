<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Chauffeurs_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get chauffeurs by chauffeur_id
     */
    function get_chauffeurs($chauffeur_id)
    {
        return $this->db->get_where('chauffeurs',array('chauffeur_id'=>$chauffeur_id))->row_array();
    }
        
    /*
     * Get all chauffeurs
     */
    function get_all_chauffeurs()
    {
        $this->db->order_by('chauffeur_id', 'desc');
        $this->db->join('status_chauffeur', 'status_chauffeur.status_chauffeur_id = chauffeurs.status_chauffeur_id');
        return $this->db->get('chauffeurs')->result_array();
    }
        
    /*
     * function to add new chauffeurs
     */
    function add_chauffeurs($params)
    {
        $this->db->insert('chauffeurs',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update chauffeurs
     */
    function update_chauffeurs($chauffeur_id,$params)
    {
        $this->db->where('chauffeur_id',$chauffeur_id);
        return $this->db->update('chauffeurs',$params);
    }
    
    /*
     * function to delete chauffeurs
     */
    function delete_chauffeurs($chauffeur_id)
    {
        return $this->db->delete('chauffeurs',array('chauffeur_id'=>$chauffeur_id));
    }
}