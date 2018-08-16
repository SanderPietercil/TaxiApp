<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Instellingen_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get instellingen by instellingen_id
     */
    function get_instellingen($instellingen_id)
    {
        return $this->db->get_where('instellingen',array('instellingen_id'=>$instellingen_id))->row_array();
    }
        
    /*
     * Get all instellingen
     */
    function get_all_instellingen()
    {
        $this->db->order_by('instellingen_id', 'desc');
        return $this->db->get('instellingen')->result_array();
    }
        
    /*
     * function to add new instellingen
     */
    function add_instellingen($params)
    {
        $this->db->insert('instellingen',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update instellingen
     */
    function update_instellingen($instellingen_id,$params)
    {
        $this->db->where('instellingen_id',$instellingen_id);
        return $this->db->update('instellingen',$params);
    }
    
    /*
     * function to delete instellingen
     */
    function delete_instellingen($instellingen_id)
    {
        return $this->db->delete('instellingen',array('instellingen_id'=>$instellingen_id));
    }
}
