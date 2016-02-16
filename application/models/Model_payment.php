<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Payment extends CI_Model {

    public function addPayment($data){
        $this->db->insert('payments', $data);
    }

    public function getUserPaymentHistory($id){
        return $this->db
                ->select('*')
                ->from('payments')
                ->where('user_id', $id)
                ->get()
                ->result();
    }
}