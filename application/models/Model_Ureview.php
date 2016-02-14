<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 2/14/16
 * Time: 9:30 PM
 */

class Model_Ureview extends CI_Model {
    public function addReview($data){
        $this->db->insert('user_reviews', $data);
        return true;
    }

    public function getAllReview($id){
        return $this->db
            ->select('*')
            ->from('user_reviews')
            ->where('reviewee_id', $id)
            ->get()
            ->result_array();
    }

    public function deleteUserReview($id){
        $this->db
            ->select('*')
            ->from('user_reviews')
            ->where('id', $id)
            ->delete();
    }
}