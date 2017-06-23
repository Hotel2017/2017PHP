<?php
class Test extends CI_Controller {

        public function index()
        {
                $this->load->helper('url');

                $this->load->view('templates/header');
                $this->load->view('test');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
}