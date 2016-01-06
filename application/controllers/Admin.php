<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 1/6/16
 * Time: 1:20 PM
 */
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->exclusiveRouteFor('ADMIN', @$_SESSION['type']);
        $this->load->model('Model_User');
    }

    public function home(){
        $data['title'] = 'DB - ADMIN VIEW';

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/home');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}