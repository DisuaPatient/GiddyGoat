<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\RedValleyModel;
use App\Models\SeeStore
class CategoryItems_controller extends BaseController {

    function __construct() {
        /* Loads the form and url helper */
        $this->session = \Config\Services::session();
        helper(['form', 'url', 'html']);
    }


    function GetCategoryItems($fabric_type_id){
        $SeeStore = new \App\Models\SeeStore();
        $data['items'] = $RedValleyModel->get_category_items($fabric_type_id);

        echo view('header', $data);
        echo view('fabrics', $data);
        echo view('footer');
    }
}
