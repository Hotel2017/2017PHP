<?php
class News extends CI_Controller {

	public function index()
        {
                $data['title'] = '-新聞特輯';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('news');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function promotion()
        {
                $data['title'] = '-促銷活動';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('promotion');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

}