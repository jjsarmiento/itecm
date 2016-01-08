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
        $this->load->model('Model_User');
        $this->load->model('Model_Products');
    }

    public function index(){
        $this->home();
    }

    public function home(){
        $data = array(
            'products'  =>  $this->Model_Products->getAllProducts()
        );

        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/home');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function addBook(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data['title'] = 'Sell a book! - Discipulus Bookshop';

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
        $data['title'] = 'Discipulus Bookshop';

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/viewProduct', $prodData);
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function userProfile(){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
        $data = array(
            'products'  =>  $this->Model_Products->myAds($_SESSION['id'])
        );

        $data['title'] = 'Discipulus Bookshop';

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

        $this->load->view('shop/header and footer/shopheader', $data);
        $this->load->view('shop/editAd');
        $this->load->view('shop/header and footer/shopfooter');
    }

    public function doEdit($id){
        $this->exclusiveRouteFor('USER', @$_SESSION['type']);
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
}