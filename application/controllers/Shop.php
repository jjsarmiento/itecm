<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 1/6/16
 * Time: 11:31 AM
 */
class Shop extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $this->load->model('Model_User');
    }

    public function home(){
        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/home');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}