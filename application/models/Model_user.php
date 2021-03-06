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
            ->where_not_in('id', $_SESSION['id'])
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
            ->select('*')
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

    public function updateUser($id, $data){
        $this->db
            ->select('*')
            ->from('users')
            ->where('id', $id)
            ->update('users', $data);
    }

    public function searchUsers($keyword){
        return $this->db
            ->select('*')
            ->from('users')
            ->like('firstname', $keyword)
            ->or_like('lastname', $keyword)
            ->get()
            ->result();
    }

    public function getExpiry($id){
        return $this->db
            ->select('payments.expires_at, payments.created_at')
            ->from('users')
            ->where('users.id', $id)
            ->join('payments', 'users.id = payments.user_id')
            ->get()
            ->row();
    }
}