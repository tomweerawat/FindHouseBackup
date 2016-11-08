<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table_name = 'account';
    public function getedatauser(){
      $query = $this->db->query('SELECT * FROM account');
          if($query->num_rows>0){
              return $query->result();
            } else {
              return array();
              }

    }




 }
