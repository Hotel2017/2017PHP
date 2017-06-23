<?php
class Order_dish extends CI_Controller {

        public function index()
        {
        	$data['title'] = '-點餐系統';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('order_dish/order_dish');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function success()
        {
                $data['title'] = '-點餐系統';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/order_success');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function modify()
        {
                $data['title'] = '-修改訂餐紀錄';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/order_modify');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
		
		public function update()
        {
                $data['title'] = '-修改此筆訂餐紀錄';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/order_update');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
		
		
		public function del()
        {
                $data['title'] = '-刪除此筆訂餐紀錄';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/order_delete');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
		public function order_check()
        {
                $data['title'] = '-檢查填寫資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/order_check');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
		
		public function time_test()
        {
                $data['title'] = '-時間測試';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('order_dish/time_test');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
}