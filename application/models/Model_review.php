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
            ->select('*')
            ->from('reviews')
            ->where('prod_id', $product)
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
}