<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
        }

        public function do_upload()
        {
                $this->load->helper('url');

                $this->load->view('templates/header_2');

                $id = $this->input->post('id');
                $room_img1 = $this->input->post('room_img1');//從update_room接收值
                $room_img2 = $this->input->post('room_img2');
                $config['upload_path']          = "images/room/$room_img1/";//設定儲存位置
                $config['allowed_types']        = 'jpg';//接受的檔案
                $config['max_size']             = 10000;
                $config['max_width']            = 2048;
                $config['max_height']           = 768;
                $config['overwrite']            = TRUE;//true=覆蓋檔案
                $config['file_name']            = $room_img2;//將檔案儲存為這個名字

                $field_name = "userfile";
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($field_name))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/update_room', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $data['room_id'] = $id;

                        $this->load->view('admin/update_room_success', $data);
                }
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function update_room()
        {
                $data['title'] = '-修改客房資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/update_room', array('error' => ' ' ));
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function update_room_finish()
        {
                $data['title'] = '-修改客房資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/update_room_finish');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function upload_room()
        {
                $data['title'] = '-修改客房資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/upload_room');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function upload_room_finish()
        {
                $data['title'] = '-修改客房資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/upload_room_finish', array('error' => ' ' ));
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function delete_room()
        {
                $data['title'] = '-修改客房資料';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/delete_room');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }


 	 public function delete_dish()
        {
                $data['title'] = '-刪除餐點';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/del_dish');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }







        public function update_text()
        {
                $data['title'] = '-修改網站文字';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/update_text');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }

        public function update_text_finish()
        {
                $data['title'] = '-修改網站文字';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/update_text_finish');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }









        public function upload_dish()
        {
                $data['title'] = '-新增餐點';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/upload_dish');
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
         public function upload_dish_finish()
        {
                $data['title'] = '-新增餐點';


                $this->load->helper('url');

                $this->load->view('templates/header_2', $data);
                $this->load->view('admin/upload_dish_finish', array('error' => ' ' ));
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
        public function do_upload_dish()
        {
                $this->load->helper('url');

                $this->load->view('templates/header_2');

                $room_img1 = $this->input->post('d_img_folder');//從update_room接收值
                $room_img2 = $this->input->post('d_name');
                $config['upload_path']          = "images/dish/$room_img1/";//設定儲存位置
                $config['allowed_types']        = 'jpg';//接受的檔案
                $config['max_size']             = 10000;
                $config['max_width']            = 2048;
                $config['max_height']           = 768;
                $config['overwrite']            = TRUE;//true=覆蓋檔案
                $config['file_name']            = $room_img2;//將檔案儲存為這個名字

                $field_name = "userfile";
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($field_name))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('admin/upload_dish_success', $data);
                }
                $this->load->view('templates/manu');
                $this->load->view('templates/footer');
        }
}