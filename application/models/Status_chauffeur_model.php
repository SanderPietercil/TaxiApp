<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Status_chauffeur_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get status_chauffeur by status_chauffeur_id
     */
    function get_status_chauffeur($status_chauffeur_id)
    {
        return $this->db->get_where('status_chauffeur',array('status_chauffeur_id'=>$status_chauffeur_id))->row_array();
    }
        
    /*
     * Get all status_chauffeur
     */
    function get_all_status_chauffeur()
    {
        $this->db->order_by('status_chauffeur_id', 'desc');
        return $this->db->get('status_chauffeur')->result_array();
    }
        
    /*
     * function to add new status_chauffeur
     */
    function add_status_chauffeur($params)
    {
        $this->db->insert('status_chauffeur',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update status_chauffeur
     */
    function update_status_chauffeur($status_chauffeur_id,$params)
    {
        $this->db->where('status_chauffeur_id',$status_chauffeur_id);
        return $this->db->update('status_chauffeur',$params);
    }
    
    /*
     * function to delete status_chauffeur
     */
    function delete_status_chauffeur($status_chauffeur_id)
    {
        return $this->db->delete('status_chauffeur',array('status_chauffeur_id'=>$status_chauffeur_id));
    }
}