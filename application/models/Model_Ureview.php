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
            ->select('user_reviews.id, user_reviews.reviewer_id, user_reviews.reviewee_id, user_reviews.content, user_reviews.created_at, users.firstname, users.lastname')
            ->from('user_reviews')
            ->where('reviewee_id', $id)
            ->join('users', 'users.id = user_reviews.reviewer_id')
            ->get()
            ->result_array();
    }

    public function review_for_user($id){
        return $this->db
            ->select('user_reviews.id, user_reviews.reviewer_id, user_reviews.reviewee_id, user_reviews.content, user_reviews.created_at, users.firstname, users.lastname')
            ->from('user_reviews')
            ->where('reviewee_id', $id)
            ->join('users', 'users.id = user_reviews.reviewer_id')
            ->get()
            ->result_array();
    }

    public function review_by_user($id){
        return $this->db
            ->select('user_reviews.id, user_reviews.reviewer_id, user_reviews.reviewee_id, user_reviews.content, user_reviews.created_at, users.firstname, users.lastname')
            ->from('user_reviews')
            ->where('reviewer_id', $id)
            ->join('users', 'users.id = user_reviews.reviewee_id')
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