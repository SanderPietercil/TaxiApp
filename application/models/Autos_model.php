<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Autos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get autos by auto_id
     */
    function get_autos($auto_id)
    {
        return $this->db->get_where('autos',array('auto_id'=>$auto_id))->row_array();
    }
        
    /*
     * Get all autos
     */
    function get_all_autos()
    {
        $this->db->order_by('auto_id', 'desc');
        $this->db->join('status_auto', 'status_auto.status_auto_id = autos.status_auto_id');
        $this->db->join('chauffeurs', 'chauffeurs.chauffeur_id = autos.chauffeur_id');
        return $this->db->get('autos')->result_array();
    }
    
    /*
     * Alle autos die binnenkort op onderhoud moeten
     */
    function get_all_autos_onderhoud()
    {
        $this->db->order_by('auto_id', 'desc');
        $this->db->join('status_auto', 'status_auto.status_auto_id = autos.status_auto_id');
        $this->db->where('(onderhoud - km_stand) < 5000');
        return $this->db->get('autos')->result_array();
    }

    /*
     * Alle autos die binnenkort op keuring moeten
     */
    function get_all_autos_keuring()
    {
        $this->db->order_by('auto_id', 'desc');
        $this->db->join('status_auto', 'status_auto.status_auto_id = autos.status_auto_id');
        $this->db->where('DATEDIFF(keuring, CURDATE()) < 30');
        return $this->db->get('autos')->result_array();
    }

    /*
     * function to add new autos
     */
    function add_autos($params)
    {
        $this->db->insert('autos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update autos
     */
    function update_autos($auto_id,$params)
    {
        $this->db->where('auto_id',$auto_id);
        return $this->db->update('autos',$params);
    }
    
    /*
     * function to delete autos
     */
    function delete_autos($auto_id)
    {
        return $this->db->delete('autos',array('auto_id'=>$auto_id));
    }
}
