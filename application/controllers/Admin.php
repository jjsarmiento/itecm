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
        $this->load->model('Model_user');
        $this->load->model('Model_products');
        $this->load->model('Model_ureview');
        $this->load->model('Model_review');
        $this->load->model('Model_bookmark');
        $this->load->model('Model_payment');
    }

    public function index(){
        $this->home();
    }

    public function home(){
        $data = array(
            'products'  =>  $this->Model_products->getAllProducts(''),
            'title'     =>  'DB - ADMIN VIEW'
        );
//        $data['title'] = 'DB - ADMIN VIEW';

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/home');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function manageUsers(){
        $data = array(
            'users'  =>  $this->Model_user->getAllUsers(),
            'title'     =>  'DB - ADMIN VIEW'
        );

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/manageUsers');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function viewUser($id){
        $data = array(
            'user'      =>  $this->Model_user->getUserData($id),
            'title'     =>  'DB - ADMIN VIEW',
            'for_reviews' =>  $this->Model_ureview->review_for_user($id),
            'by_reviews' =>  $this->Model_ureview->review_by_user($id),
            'products'  =>  $this->Model_products->myAds($id),
            'payments'  =>  $this->Model_payment->getUserPaymentHistory($id)
        );

        $data['ads'] = $this->Model_bookmark->getAllBookmark($id);

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
        $this->Model_user->toggleStatus($id, $data);
        redirect(base_url().'admin/viewUser/'.$id);
    }

    public function activate($id){
        $data = array(
            'status'    =>  'ACTIVATED'
        );
        $this->Model_user->toggleStatus($id, $data);
        redirect(base_url().'admin/viewUser/'.$id);
    }

    public function viewProduct($id){
        $data['prod'] = $this->Model_products->getProductData($id);
        $data['title'] = 'DB - ADMIN VIEW';
        $prodData['reviews'] = $this->Model_review->getReview($id);
        $prodData['bookmarked'] = $this->Model_bookmark->isBookmarked($id);

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/viewProduct', $prodData);
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function editAd($id){
        $data['prod'] = $this->Model_products->getProductData($id);
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

        $this->Model_products->updateProduct($id, $data);
        redirect(base_url().'admin/viewProduct/'.$id);
    }

    public function notice(){
        $data['title'] = 'Administrator Mode';
        $this->load->view('admin/notice');
    }

    public function deleteUserReview($id){
        $this->Model_ureview->deleteUserReview($id);
        redirect($this->agent->referrer());
    }

    public function changePass($id){
        $updatedData = array(
            'password'  =>  md5($_POST['newPass'])
        );

        $this->Model_user->updateUser($_SESSION['id'], $updatedData);
        $_SESSION['successMsg'] = 'Password Succesfully Changed!';
        redirect($this->agent->referrer());
    }

    public function deleteComment($id){
        $this->Model_review->deleteComment($id);
        redirect($this->agent->referrer());
    }

    public function searchBook(){
        $data['title'] = 'Search for '.$_POST['adSearch'];
        $data['by_authors'] = $this->Model_products->searchByAuthor($_POST['adSearch']);
        $data['by_title'] = $this->Model_products->searchByTitle($_POST['adSearch']);
        $data['keyword'] = $_POST['adSearch'];

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/searchBook');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function searchUser(){
        $data['title'] = 'Search for '.$_POST['adSearch'];
        $data['users'] = $this->Model_user->searchUsers($_POST['adSearch']);
        $data['keyword'] = $_POST['adSearch'];

        $this->load->view('admin/header and footer/adminheader', $data);
        $this->load->view('admin/searchUser');
        $this->load->view('admin/header and footer/adminfooter');
    }

    public function deleteAd($id){
        $this->Model_products->deleteAd($id);
        $this->Model_bookmark->deleteBookmark($id, null);
        redirect(base_url().'admin/home');

    }
}