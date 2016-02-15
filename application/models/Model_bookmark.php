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

    public function getAllBookmark_session($id){
        return $this->db
            ->select('ad_id')
            ->from('bookmarks')
            ->where('user_id', $id)
            ->get()
            ->result_array();
    }

    public function deleteBookmark($ad_id, $user_id){
        if($user_id == null){
            $this->db
                ->select('*')
                ->from('bookmarks')
                ->where('ad_id', $ad_id)
                ->delete();
        }else{
            $this->db
                ->select('*')
                ->from('bookmarks')
                ->where('user_id', $user_id)
                ->where('ad_id', $ad_id)
                ->delete();
        }
    }

    public function isBookmarked($ad_id){
        $counter = $this->db
            ->select('*')
            ->from('bookmarks')
            ->where('ad_id', $ad_id)
            ->count_all_results();

        if($counter > 0){
            return true;
        }else{
            return false;
        }
    }

    public function countBookmarks($userid){
        return $this->db
            ->select('*')
            ->from('bookmarks')
            ->where('user_id', $userid)
            ->count_all_results();
    }
}