<?php
class Customer extends CI_Controller {

	public function index()
        {
                $data['title'] = '-會員專區';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('login/login.html');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function member_update()
        {
                $data['title'] = '-基本資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('customer/mem_update');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function member_update_end()
        {
                $data['title'] = '-更改資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('customer/mem_update_end');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function mem_pwd()
        {
                $data['title'] = '-修改密碼';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('customer/mem_Pwd');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function mem_pwd_do()
        {
                $data['title'] = '-修改密碼';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('customer/mem_doPwd');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        
}