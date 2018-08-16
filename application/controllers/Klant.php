<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Klant extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tblklant_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'klant/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'klant/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'klant/index.html';
            $config['first_url'] = base_url() . 'klant/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tblklant_model->total_rows($q);
        $klant = $this->Tblklant_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'klant_data' => $klant,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('klant/tblklant_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tblklant_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'naam' => $row->naam,
		'voornaam' => $row->voornaam,
		'straat' => $row->straat,
		'gemeente_id' => $row->gemeente_id,
		'gebdat' => $row->gebdat,
		'telnummer' => $row->telnummer,
	    );
            $this->load->view('klant/tblklant_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klant'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('klant/create_action'),
	    'id' => set_value('id'),
	    'naam' => set_value('naam'),
	    'voornaam' => set_value('voornaam'),
	    'straat' => set_value('straat'),
	    'gemeente_id' => set_value('gemeente_id'),
	    'gebdat' => set_value('gebdat'),
	    'telnummer' => set_value('telnummer'),
	);
        $this->load->view('klant/tblklant_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'naam' => $this->input->post('naam',TRUE),
		'voornaam' => $this->input->post('voornaam',TRUE),
		'straat' => $this->input->post('straat',TRUE),
		'gemeente_id' => $this->input->post('gemeente_id',TRUE),
		'gebdat' => $this->input->post('gebdat',TRUE),
		'telnummer' => $this->input->post('telnummer',TRUE),
	    );

            $this->Tblklant_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('klant'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tblklant_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('klant/update_action'),
		'id' => set_value('id', $row->id),
		'naam' => set_value('naam', $row->naam),
		'voornaam' => set_value('voornaam', $row->voornaam),
		'straat' => set_value('straat', $row->straat),
		'gemeente_id' => set_value('gemeente_id', $row->gemeente_id),
		'gebdat' => set_value('gebdat', $row->gebdat),
		'telnummer' => set_value('telnummer', $row->telnummer),
	    );
            $this->load->view('klant/tblklant_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klant'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'naam' => $this->input->post('naam',TRUE),
		'voornaam' => $this->input->post('voornaam',TRUE),
		'straat' => $this->input->post('straat',TRUE),
		'gemeente_id' => $this->input->post('gemeente_id',TRUE),
		'gebdat' => $this->input->post('gebdat',TRUE),
		'telnummer' => $this->input->post('telnummer',TRUE),
	    );

            $this->Tblklant_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('klant'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tblklant_model->get_by_id($id);

        if ($row) {
            $this->Tblklant_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('klant'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klant'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('naam', 'naam', 'trim|required');
	$this->form_validation->set_rules('voornaam', 'voornaam', 'trim|required');
	$this->form_validation->set_rules('straat', 'straat', 'trim|required');
	$this->form_validation->set_rules('gemeente_id', 'gemeente id', 'trim|required');
	$this->form_validation->set_rules('gebdat', 'gebdat', 'trim|required');
	$this->form_validation->set_rules('telnummer', 'telnummer', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Klant.php */
/* Location: ./application/controllers/Klant.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-12-04 13:48:11 */
/* http://harviacode.com */