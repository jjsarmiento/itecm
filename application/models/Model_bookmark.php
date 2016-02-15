<?php
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 2/15/16
 * Time: 2:47 PM
 */

class Model_bookmark extends CI_Model{
    public function addBookmark($data){
        $this->db->insert('bookmarks', $data);
    }

    public function getAllBookmark($id){
        return $this->db
            ->select('bookmarks.user_id, bookmarks.ad_id, bookmarks.created_at, products.title, products.author, products.description, products.price, products.img')
            ->from('bookmarks')
            ->where('bookmarks.user_id', $id)
            ->join('products', 'products.id = bookmarks.ad_id')
            ->order_by('bookmarks.created_at', 'DESC')
            ->get()
            ->result_array();
    }
}