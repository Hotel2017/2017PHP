<?php
class Hotel extends CI_Controller {

        public function index()
        {
        		$data['title'] = '';

                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('lobby');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
}