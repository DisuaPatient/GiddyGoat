<?php

namespace App\Models;

use CodeIgniter\Model;

class customerModel extends Model
{
	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url']);
       $this->db=\Config\Database::connect();



	}
   protected $table = 'member';
   protected $primaryKey = 'member_id';
   protected $allowedFields = ['fName','lName','emailAddress', 'country' , 'addressLine1','addressLine2','addressLine3','county',
   'city','phone','password'
   ];


}


	?>
