<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_User');
    }

	public function index(){
        $data['title'] = 'Discipulus Bookshop';

		$this->load->view('header and footer/header', $data);
        $this->load->view('index');
        $this->load->view('header and footer/footer');
    }

    public function register(){
        $data['title'] = 'Discipulus - Registration';

        $this->load->view('header and footer/header', $data);
        $this->load->view('registration');
        $this->load->view('header and footer/footer');
    }

    public function doRegister(){
        if($this->Model_User->checkUser($this->input->post('regEmail')) == 0){
            $data = array(
                'email'     =>  $this->input->post('regEmail'),
                'password'  =>  md5($this->input->post('regPassword')),
                'firstname' =>  $this->input->post('regFirstname'),
                'lastname'  =>  $this->input->post('regLastname'),
                'contact'   =>  $this->input->post('regContact'),
                'address'   =>  $this->input->post('regAddress'),
                'about'   =>  $this->input->post('regAbout'),
            );

            if($this->Model_User->addUser($data) != true){
                echo 'ERROR500: There seems to be a problem in the server.<br/>Please try again later or contact the admin for immediate action';
            }else{
                $user_data = $this->Model_User->getUserData($this->input->post('regEmail'));

                $loggedUser = array(
                    'id'            =>  $user_data->id,
                    'email'         =>  $user_data->email,
                    'firstname'     =>  $user_data->firstname,
                    'lastname'      =>  $user_data->lastname,
                    'type'          =>  $user_data->type,
                    'logged_in'     =>  true
                );

                $this->session->set_userdata($loggedUser);
                redirect(base_url().'shop/home');
            }
        }else{
            $_SESSION['registerErrorMsg'] = 'This email is already registered';
            redirect('/');
        }
    }

    public function doLogin(){
        $data = array(
            'email'     =>  $this->input->post('loginEmail'),
            'password'  =>  $this->input->post('loginPassword')
        );

        if($this->Model_User->authUser($data) > 0){
            $user_data = $this->Model_User->getUserData($this->input->post('loginEmail'));
//            $user_data['logged_in'] = true;
//            var_dump($user_data['email']);

            if($user_data->status == 'DEACTIVATED'){
                $_SESSION['errorMsg'] = '<span style="color: #C0392B; font-size: 0.9em;">This account has been deactivated. Please contact the administrator for further details @ discipulus@gmail.com</span>';
                redirect(base_url());
            }else{
                $loggedUser = array(
//                'username'  =>  $user_data['email'],
                    'id'            =>  $user_data->id,
                    'email'         =>  $user_data->email,
                    'firstname'     =>  $user_data->firstname,
                    'lastname'      =>  $user_data->lastname,
                    'type'          =>  $user_data->type,
                    'logged_in'     =>  true
                );

                $this->session->set_userdata($loggedUser);

                if($user_data->type == 'ADMIN'){
                    redirect(base_url().'Admin/home');
                }else{
                    redirect(base_url().'shop/home');
                }
            }
        }else{
            $this->load->view('errors/error_page', array('error' => 'Login Credentials Invalid'));
//            echo 'LOGIN FAILED';
        }
    }
}
