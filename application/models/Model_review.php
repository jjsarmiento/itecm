<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 2/14/16
 * Time: 12:28 PM
 */

class Model_review extends CI_Model{
    public function getReview($product){
        return $this->db
            ->select('reviews.id, reviews.user_id, reviews.prod_id, reviews.group_id, reviews.content, reviews.created_at, users.firstname, users.lastname')
            ->from('reviews')
            ->where('reviews.prod_id', $product)
            ->join('users', 'users.id = reviews.user_id')
            ->order_by('reviews.created_at', 'DESC')
            ->get()
            ->result_array();
    }

    public function addReview($data){
        $this->db->insert('reviews', $data);
    }

    public function getContent($group_id){
        return $this->db
        ->select('content')
        ->from('reviews')
        ->where('group_id', $group_id)
        ->get()
        ->result_array();
    }

    public function deleteComment($id){
        $this->db
            ->select('*')
            ->from('reviews')
            ->where('id', $id)
            ->delete();
    }
}