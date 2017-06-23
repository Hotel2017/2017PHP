<?php
class login extends CI_Controller {

	public function index()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('login/login.html');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function member_login()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/member_login');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function member_logout()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/member_logout');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

// 
        public function emp()
        {
                $data['title'] = '-員工登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/emp_login.html');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function emp_login()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/emp_login');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function emp_logout()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/emp_logout');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function emp_login_html()
        {
                $data['title'] = '-顧客登入系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('login/emp_login.html');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }


}