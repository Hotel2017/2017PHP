<?php 
	class upload_img extends CI_Model {

    var $room_img1 = '';
    var $room_img2 = '';

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries',10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // 請看一下下面的注意事項
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
         $this->input->post('room_img1');
         $this->input->post('room_img2');

        $this->db->update('entries', $this,array('id' => $_POST['id']));
    }

}
 ?>
