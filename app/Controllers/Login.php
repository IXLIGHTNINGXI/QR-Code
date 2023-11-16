<?php
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        // แสดงหน้า login
        $this->load->view('login_view');
    }

    public function process_login() {
        // ดึงข้อมูลจากฟอร์ม
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // เรียกฟังก์ชันใน model เพื่อตรวจสอบการเข้าสู่ระบบ
        $user = $this->user_model->get_user($username, $password);

        if ($user) {
            // ถ้าเข้าสู่ระบบสำเร็จ, ทำตามต้องการ
            echo "Login successful. Welcome, " . $user->username;
        } else {
            // ถ้าเข้าสู่ระบบไม่สำเร็จ, ให้กลับไปที่หน้า login
            redirect('login');
        }
    }
}
