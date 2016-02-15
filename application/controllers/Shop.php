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
//        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        if(@$_SESSION['type'] == 'ADMIN'){
            redirect(base_url().'Admin/notice');
        }

        $this->load->model('Model_User');
        $this->load->model('Model_Products');
        $this->load->model('Model_Review');
        $this->load->model('Model_Ureview');
        $this->load->model('Model_Bookmark');
    }

    public function index(){
        $this->home();
    }

    public function home(){
        if(@$_SESSION['type'] == 'ADMIN'){
            redirect(base_url().'Admin/notice');
        }

        $data = array(
            'products'  =>  $this->Model_Products->getAllProducts()
        );
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);
        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/home');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function addBook(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['title'] = 'Sell a book! - Discipulus Bookshop';
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/addBook');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function doAddProduct(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $path_parts = pathinfo($_FILES['prodImg']["name"]);
        $extension = $path_parts['extension'];
        $newfilename= uniqid().".".$extension;

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4194304';
        $config['file_name'] = $newfilename;
//        $config['max_width'] = '1024';
//        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if($this->upload->do_upload('prodImg')){
            $data = array('upload_data' => $this->upload->data());
        }else{
            $_SESSION['errorMsg'] = $this->upload->display_errors();
            redirect(base_url().'Admin/addBook');
        }

        $productData = array(
            'user_id'       =>  $_SESSION['id'],
            'user_fullname' =>  $_SESSION['firstname'].' '.$_SESSION['lastname'],
            'title'         =>  $this->input->post('bookTitle'),
            'author'        =>  $this->input->post('bookAuthor'),
            'price'         =>  $this->input->post('bookPrice'),
            'description'   =>  $this->input->post('description'),
            'img'           =>  base_url().'uploads/'.$newfilename
        );

        $productInsertId = $this->Model_Products->addProduct($productData);
        redirect(base_url().'shop/viewProduct/'.$productInsertId);

//        if($img['size'] >= 4194304){
//            $_SESSION['errorMsg'] = 'File size is too large. Must be below 4mb';
//            redirect(base_url().'Admin/addProduct');
//        }
    }

    public function viewProduct($id){
        $prodData['prod'] = $this->Model_Products->getProductData($id);
        $prodData['reviews'] = $this->Model_Review->getReview($id);
        $prodData['bookmarked'] = $this->Model_Bookmark->isBookmarked($id);
        $data['title'] = 'Discipulus Bookshop';
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/viewProduct', $prodData);
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function userProfile(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data = array(
            'products'  =>  $this->Model_Products->myAds($_SESSION['id']),
            'user'      =>  $this->Model_User->getUserData($_SESSION['id']),
            'reviews'   =>  $this->Model_Ureview->getAllReview($_SESSION['id'])
        );

        $data['title'] = 'Discipulus Bookshop';
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/userProfile');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function editAd($id){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['prod'] = $this->Model_Products->getProductData($id);
        $data['title'] = 'Discipulus Bookshop';
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/editAd');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function doEdit($id){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);
        var_dump($this->input->post());
        $data = array(
            'title'         => $this->input->post('bookTitle'),
            'description'   => $this->input->post('bookDesc'),
            'price'         => $this->input->post('bookPrice'),
            'author'        => $this->input->post('bookAuthor'),
        );

        $this->Model_Products->updateProduct($id, $data);
        redirect(base_url().'shop/viewProduct/'.$id);
    }

    public function addReview($product_id){
        $review = trim(strip_tags($_POST['review']));
        $this->Model_Review->addReview(array(
            'user_id'       => $_SESSION['id'],
            'user_fullname' => $_SESSION['firstname'].' '.$_SESSION['lastname'],
            'prod_id'       => $product_id,
            'content'       => $review
        ));

        redirect(base_url().'shop/viewProduct/'.$product_id);
    }

    public function deleteComment($commentId){
        $this->Model_Review->deleteComment($commentId);
        redirect($this->agent->referrer());
    }

    public function viewUser($id){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data = array(
            'products'  =>  $this->Model_Products->myAds($id),
            'user'      =>  $this->Model_User->getUserData($id),
            'reviews'   =>  $this->Model_Ureview->getAllReview($id)
        );
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/userProfile');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function reviewUser($id){
        $this->Model_Ureview->addReview(array(
            'reviewer_id'       =>  $_SESSION['id'],
            'reviewer_fullname' =>  $_SESSION['firstname'].' '.$_SESSION['lastname'],
            'reviewee_id'       =>  $id,
            'content'       =>  $_POST['userReview']
        ));

        redirect($this->agent->referrer());
    }

    public function deleteUserReview($id){
        $this->Model_Ureview->deleteUserReview($id);
        redirect($this->agent->referrer());
    }

    public function editProfile(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['user'] = $this->Model_User->getUserData($_SESSION['id']);
        $data['title'] = 'Discipulus Bookshop';
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/editProfile');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function doEditProfile(){
        $dp = "";

        if ($_FILES['editDPic']['size'] != 0 && $_FILES['editDPic']['error'] == 0){
            $path_parts = pathinfo($_FILES['editDPic']["name"]);
            $extension = $path_parts['extension'];
            $newfilename= uniqid().".".$extension;

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '4194304';
            $config['file_name'] = $newfilename;
//        $config['max_width'] = '1024';
//        $config['max_height'] = '768';
            $this->load->library('upload', $config);

            if($this->upload->do_upload('editDPic')){
                $data = array('upload_data' => $this->upload->data());
            }else{
                $_SESSION['errorMsg'] = $this->upload->display_errors();
                var_dump($_SESSION['errorMsg']);
                //redirect(base_url().'Admin/addBook');
            }

            if(file_exists(trim($_SESSION['disp_pic']))){
                unlink(trim($_SESSION['disp_pic']));
            }

            $dp = base_url().'uploads/'.$newfilename;
        }else{
            $dp = $_SESSION['disp_pic'];
        }

        $data = array(
            'email'     =>  $this->input->post('editEmail'),
            'firstname' =>  $this->input->post('editFname'),
            'lastname'  =>  $this->input->post('editLname'),
            'contact'   =>  $this->input->post('editContact'),
            'address'   =>  $this->input->post('editAddress'),
            'about'     =>  $this->input->post('editAbout'),
            'birthday'  =>  $this->input->post('editBdate'),
            'gender'    =>  $this->input->post('editGender'),
            'disp_pic'  =>  $dp
        );

        $data_merge = array(
            'id'                =>  $_SESSION['id'],
            'type'              =>  $_SESSION['type'],
            'date_added'        =>  $_SESSION['date_added'],
            'status'            =>  $_SESSION['status'],
            'logged_in'         =>  true,
            'bookmarks'         =>  $_SESSION['bookmarks']
        );

        $this->Model_User->updateUser($_SESSION['id'], $data);
        //$this->session->sess_destroy();
        $data = array_merge($data, $data_merge);
        $this->session->set_userdata($data);

        redirect($this->agent->referrer());
    }

    public function changePass($id){
        $data = array(
            'email'     => $_SESSION['email'],
            'password'  => $_POST['oldPass'],
        );

        $truePass = $this->Model_User->authUser($data);

        if($_POST['newPass'] !== $_POST['confirmNewPass']){
            $_SESSION['errorMsg'] = 'New Password does not match';
            redirect($this->agent->referrer());
        }

        if($truePass){
            $updatedData = array(
                'password'  =>  md5($_POST['newPass'])
            );

            $this->Model_User->updateUser($_SESSION['id'], $updatedData);
            $_SESSION['successMsg'] = 'Password Succesfully Changed!';
            redirect($this->agent->referrer());

        }else{
            $_SESSION['errorMsg'] = 'Old Password Incorrect';
            redirect($this->agent->referrer());
        }
    }

    public function viewBookMarks(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['title'] = 'Sell a book! - Discipulus Bookshop';
        $data['ads'] = $this->Model_Bookmark->getAllBookmark($_SESSION['id']);
        $data['bookmark_count'] = $this->Model_Bookmark->countBookmarks(@$_SESSION['id']);

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/viewBookMarks');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function bookMarkAd($id){
        $this->Model_Bookmark->addBookmark(array(
            'user_id'       =>  $_SESSION['id'],
            'ad_id'       =>  $id
        ));

        redirect($this->agent->referrer());
    }

    public function removeBookmark($productid){
        $ad_id = $this->Model_Products->getProductData($productid)['id'];
        $this->Model_Bookmark->deleteBookmark($ad_id, $_SESSION['id']);
        /*
        $newbookmark_session['bookmarks'] = array();

        for($i = 0; $i < count($_SESSION['bookmarks']); $i++){
            if($ad_id != $_SESSION['bookmarks'][$i]){
                array_push($newbookmark_session['bookmarks'], $_SESSION['bookmarks'][$i]);
            }
        }

        $data = array(
            'id'                =>  $_SESSION['id'],
            'type'              =>  $_SESSION['type'],
            'date_added'        =>  $_SESSION['date_added'],
            'status'            =>  $_SESSION['status'],
            'logged_in'         =>  true,
            'bookmarks'         =>  $newbookmark_session['bookmarks'],
            'email'             =>  $_SESSION['email'],
            'firstname'         =>  $_SESSION['firstname'],
            'lastname'          =>  $_SESSION['lastname'],
            'contact'           =>  $_SESSION['contact'],
            'address'           =>  $_SESSION['address'],
            'about'             =>  $_SESSION['about'],
            'birthday'          =>  $_SESSION['birthday'],
            'gender'            =>  $_SESSION['gender'],
            'disp_pic'          =>  $_SESSION['disp_pic']
        );

        $this->session->set_userdata($newbookmark_session);
        */
        redirect($this->agent->referrer());
    }

    public function search(){
        //$this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['title'] = 'Search for '.$_POST['searchKeyword'];
        $data['by_authors'] = $this->Model_Products->searchByAuthor($_POST['searchKeyword']);
        $data['by_title'] = $this->Model_Products->searchByTitle($_POST['searchKeyword']);
        $data['keyword'] = $_POST['searchKeyword'];

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/search');
        $this->load->view('shop/header and footer/shopfooter');
    }
}