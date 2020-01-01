<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function get_post($post_id){   
         $this->db->where('post_id', $post_id);    
         $query = $this->db->get('post');    
         
         if ($query->num_rows() > 0) {
             $data = $query->row_array();        
             return $data;    
         }    
         return FALSE;
    }
    public function update_post($post_id, $data){  
        
         $this->db->where('post_id', $post_id);    
         return $this->db->update('post', $data);
        }

    public function insert_data($data) {
        return $this->db->insert('post',$data);
    }
    public function get_all_posts() {
        $this->db->order_by('sticky','DESC');
        $this->db->order_by('timestamp','DESC');
        $query = $this->db->get('post');

        if ($query->num_rows()>0) {
            foreach($query->result_array() as $item){
                $data[] = $item;
            }
            return $data;

        }
        return FALSE;

    }
}