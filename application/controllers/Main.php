<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
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
}
