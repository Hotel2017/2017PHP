<?php
class Contact extends CI_Controller {

	public function index()
    {
            $data['title'] = '-聯絡我們';


            $this->load->helper('url');

	    //             $this->load->library('email');

					// $this->email->from('your@example.com', 'Your Name');
					// $this->email->to('villain@kimo.com');
					// $this->email->cc('another@another-example.com');
					// $this->email->bcc('them@their-example.com');

					// $this->email->subject('Email Test');
					// $this->email->message('Testing the email class.');

					// $this->email->send();

            $this->load->view('templates/header', $data);
            $this->load->view('contact');
            $this->load->view('templates/manu');
            $this->load->view('templates/footer');
    }

    public function waiting()
        {
                $data['title'] = '-促銷活動';


                $this->load->helper('url');

                $this->load->view('contact_finish');
        }

       
}