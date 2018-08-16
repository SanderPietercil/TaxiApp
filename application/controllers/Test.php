<?php

class Test extends CI_Controller {
    public function index() {
        $this->load->library('encryption');
        $key = $this->encryption->create_key(16);
        echo $key;
    }
}