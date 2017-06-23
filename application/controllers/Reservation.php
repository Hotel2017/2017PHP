<?php
class Reservation extends CI_Controller {

        public function index()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('reservation/all_room');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function booking()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/booking');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function booking_select()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/booking_select');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function booking_show_result()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/booking_show_result');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function filldata()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/filldata');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function register_check()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/register_check');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

         public function register_check_member()
        {
        		$data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/register_check_member');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function show_record()
        {
                $data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/showRecord/showBookingRecord');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function del_record()
        {
                $data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/showRecord/del_record');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function show_detail()
        {
                $data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/show_detail');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function search()
        {
                $data['title'] = '-訂房系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('reservation/search');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        
}