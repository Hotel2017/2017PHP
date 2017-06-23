<?php
class Local_guide extends CI_Controller {

	public function index()
        {
                $data['title'] = '-在地指南';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('local_guide');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

}