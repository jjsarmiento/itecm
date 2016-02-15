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
//        $this->exclusiveRouteFor('ADMIN', @$_SESSION['type']);
        $this->load->model('Model_User');
        $this->load->model('Model_Products');
        $this->load->model('Model_Ureview');
        $this->load->model('Model_Review');
        $this->load->model('Model_Bookmark');
    }

    public function index(){
        $this->home();
    }

    public function home(){
        $data = array(
            'products'  =>  $this->Model_Products->getAllProducts(''),
            'title'     =>  'DB - ADMIN VIEW'
        );
//        $data['title'] = 'DB - ADMIN VIEW';

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/home');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function manageUsers(){
        $data = array(
            'users'  =>  $this->Model_User->getAllUsers(),
            'title'     =>  'DB - ADMIN VIEW'
        );

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/manageUsers');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function viewUser($id){
        $data = array(
            'user'      =>  $this->Model_User->getUserData($id),
            'title'     =>  'DB - ADMIN VIEW',
            'for_reviews' =>  $this->Model_Ureview->review_for_user($id),
            'by_reviews' =>  $this->Model_Ureview->review_by_user($id),
        );

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/viewUser');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function deactivate($id){
        $data = array(
            'status'    =>  'DEACTIVATED'
        );
        $this->Model_User->toggleStatus($id, $data);
        redirect(base_url().'admin/viewUser/'.$id);
    }

    public function activate($id){
        $data = array(
            'status'    =>  'ACTIVATED'
        );
        $this->Model_User->toggleStatus($id, $data);
        redirect(base_url().'admin/viewUser/'.$id);
    }

    public function viewProduct($id){
        $data['prod'] = $this->Model_Products->getProductData($id);
        $data['title'] = 'DB - ADMIN VIEW';
        $prodData['reviews'] = $this->Model_Review->getReview($id);
        $prodData['bookmarked'] = $this->Model_Bookmark->isBookmarked($id);

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/viewProduct', $prodData);
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function editAd($id){
        $data['prod'] = $this->Model_Products->getProductData($id);
        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/editAd');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function doEdit($id){
        var_dump($this->input->post());
        $data = array(
            'title'         => $this->input->post('bookTitle'),
            'description'   => $this->input->post('bookDesc'),
            'price'         => $this->input->post('bookPrice'),
            'author'        => $this->input->post('bookAuthor'),
        );

        $this->Model_Products->updateProduct($id, $data);
        redirect(base_url().'admin/viewProduct/'.$id);
    }

    public function notice(){
        $data['title'] = 'Administrator Mode';
        $this->load->view('admin/notice');
    }

    public function deleteUserReview($id){
        $this->Model_Ureview->deleteUserReview($id);
        redirect($this->agent->referrer());
    }

    public function changePass($id){
        $updatedData = array(
            'password'  =>  md5($_POST['newPass'])
        );

        $this->Model_User->updateUser($_SESSION['id'], $updatedData);
        $_SESSION['successMsg'] = 'Password Succesfully Changed!';
        redirect($this->agent->referrer());
    }

    public function deleteComment($id){
        $this->Model_Review->deleteComment($id);
        redirect($this->agent->referrer());
    }
}