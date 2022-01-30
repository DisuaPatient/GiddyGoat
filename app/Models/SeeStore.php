<?php

namespace App\Models;

use CodeIgniter\Model;

class SeeStore extends Model {

    function __construct() {
        helper(['url','html','form']);
        $this->db = \Config\Database::connect();
    }


    function get_category_items($fabric_type_id){
        $query = $this->db->query("Call getFabricTypes($accountID)");
        $result = $query->getResultArray();
        $query->freeResult();
        return $result;
    }




}
