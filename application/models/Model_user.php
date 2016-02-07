<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 1/6/16
 * Time: 12:08 PM
 */

/*
 * regFirstname
 * regLastname
 * regAddress
 * regAbout
 * regContact
 * regEmail
 * regUsername
 * regPassword
 *
 * */

class Model_user extends CI_Model {
    public function getAllUsers(){
        return $this->db
            ->select('*')
            ->from('users')
            ->order_by('date_added', 'DESC')
            ->get()
            ->result();
    }

    public function checkUser($email){
        $this->db
            ->select('*')
            ->from('users')
            ->where('email', $email);
        return $this->db->count_all_results();
    }

    public function addUser($data){
        $this->db->insert('users', $data);
        return true;
    }

    public function authUser($data){
        $query = $this->db
            ->select('password, email')
            ->from('users')
            ->where('email', $data['email'])
            ->where('password', md5($data['password']))
            ->count_all_results();

        if($query == 0){
            return false;
        }else if($query >= 1){
            return true;
        }else{
            return 'ERROR';
        }
    }

    public function getUserData($id){
        return $this->db
            ->select('email, firstname, lastname, id, type, address, about, contact, status, gender, disp_pic, birthday')
            ->from('users')
            ->where('id', $id)
            ->or_where('email', $id)
            ->get()
            ->row();
//                ->result_array();
    }

    public function toggleStatus($id, $data){
        $this->db
            ->select('*')
            ->from('users')
            ->where('id', $id)
            ->update('users', $data);
    }
}