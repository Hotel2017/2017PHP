<?php
class Employee extends CI_Controller {

	public function index()
        {
                $data['title'] = '-員工專區';


                $this->load->helper('url');

                $this->load->view('templates/header', $data);
                $this->load->view('login/login.html');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function emp_update()
        {
                $data['title'] = '-基本資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/emp_update');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function emp_update_end()
        {
                $data['title'] = '-更改資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/emp_update_end');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function emp_pwd()
        {
                $data['title'] = '-修改密碼';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/emp_Pwd');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function emp_pwd_do()
        {
                $data['title'] = '-修改密碼';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/emp_doPwd');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function view_record()
        {
                $data['title'] = '-全部訂單';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/view_record');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function pay()
        {
                $data['title'] = '-確認付款';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/pay.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function del_record()
        {
                $data['title'] = '-取消訂單';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/del_record.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function recover_record()
        {
                $data['title'] = '-取消訂單';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/recover_record.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function invoice()
        {
                $data['title'] = '-發票明細';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/invoice.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function insert_invoice()
        {
                $data['title'] = '-發票明細';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/insert_invoice.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function statistics_A()
        {
                $data['title'] = '-熱門房型';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/pieCharts.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function statistics_B()
        {
                $data['title'] = '-熱門餐點';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/columnCharts.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function statistics_C()
        {
                $data['title'] = '-月報表';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('employee/columnCharts2.php');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

}