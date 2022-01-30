<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressBookModel extends Model
{
	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url']);
       $this->db=\Config\Database::connect();



	}


	function lastInsertID() {

		//Connect to the database
		$db = \Config\Database::connect();

		//Get the ID of the last record entered in the database
		return $db->insertID();
	}



 // Add new customer to the table
 function SignUp(){

$db = \Config\Database::connect(); //Connect to the database
 //Specify the table to run query on

	 //Data to add to the Customer table
	 $fName=$_POST['fName'];
	 $lName=$_POST['lName'];
	 $emailAddress=$_POST['emailAddress'];
	 $country=$_POST['country'];
	 $county=$_POST['county'];
	 $city=$_POST['city'];
	 $addressLine1=$_POST['addressLine1'];
	 $addressLine2=$_POST['addressLine2'];
	 $addressLine3=$_POST['addressLine3'];
	 $password=$_POST['password'];
	 $phone=$_POST['phone'];
	 //Call stored procedure to insert into the customer name table
     $this->db->query(" CALL SignUp('$fName', '$lName' , '$emailAddress' , '$country' ,
		  '$county','$city', '$addressLine1', '$addressLine2' , '$addressLine3' , '$password' , '$phone')");
	 //The Output Parameter - Retrieve the new master_id for the new contact just added
     // $member_id_Value = $db->query("SELECT @member_id as member_id")->getRow();
     // $member_id = $member_id_Value->member_id;
     // return $member_id;
 }

 // login function
 function ValidUser(){

	 $db = \Config\Database::connect(); //Connect to the database
     $builder = $db->table('member'); //Specify the table to run query on

	 //Data to add to the Customer table
	 $member_id = "";
	 $emailAddress = $_POST['emailAddress'];
	 $password = $_POST['password'];
	 $query = $this->db->query(" CALL validMember('$emailAddress','$password')");

	 if ($query->getNumRows()>0){
	 foreach($query->getResultArray() as $member){

      $member_id = $member['member_id'];
	 }
	 }
	 else{
	 }
	  $query->freeResult();
	 return $member_id;
 }

    function getmember_id(){
        $query = $this->db->query("Call validMember");
        $result = $query->getResultArray();
        $query->freeResult();
        return $result;
    }

   




}


	?>
