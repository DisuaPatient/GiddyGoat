<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\AddressBookModel;
use App\Models\customerModel;    //Loads the MasterNameModel  Model

class login_Controller extends BaseController
{
	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url','html']);
		$validation = \Config\Services::validation();


	}


    public function index() {

		//Render the mymenu view
       echo view('header');
        echo view('body');
        echo view('footer');


    }

			function Register (){

		$validation = \Config\Services::validation();
		$rules  = [
		             'fName' => [ 	'label' => 'First Name',
													'rules'  => 'required',
													'errors' => ['required' => 'You MUST enter a {field}']],

									'lName' => [	'label' => 'Last Name',
													'rules'  => 'required',
													'errors' => ['required' => 'You MUST supply a {field}.']],

									'emailAddress' =>	[	'label' => 'Email',
													'rules'  => 'required',
													'errors' => ['required' => 'You MUST supply an {field}.']],

							  	'country' =>	[	'label' => 'Country',
				 													'rules'  => 'required',
				 													'errors' => ['required' => 'You MUST supply an {field}.']],

									'county' =>	[	'label' => 'County',
																					'rules'  => 'required',
																					'errors' => ['required' => 'You MUST supply an {field}.']],

									'city' =>	[	'label' => 'City',
																							'rules'  => 'required',
																							'errors' => ['required' => 'You MUST supply an {field}.']],

								'addressLine1' =>	[	'label' => 'AddressLine1',
																					'rules'  => 'required',
																			  	'errors' => ['required' => 'You MUST supply an {field}.']],

							'addressLine2' =>	[	'label' => 'AddressLine2',
																	'rules'  => 'required',
																	'errors' => ['required' => 'You MUST supply an {field}.']],

							'addressLine3' =>	[	'label' => 'AddressLine3',
																		'rules'  => 'required',
																		'errors' => ['required' => 'You MUST supply an {field}.']],

				   		'password' =>	[	'label' => 'Password',
																					 'rules' => 'required|min_length[6]|max_length[20]',
																						'errors' =>[
																							 'required'=>'Password required',
																							 'min_length'=> 'Password must have minimum 6 char in length',
																							 'max_length'=> 'Password Must not have char more than 20 in length']],

								'phone' => [	'label' => 'PhoneNumber',
														'rules'  => 'required',
														'errors' => ['required' => 'You MUST supply an {field}.']]


								];





								if (! $this->validate($rules)) {
									//Get validator details - error messgaes etc.
									$data['validation'] = $this->validator;

									//Load the addEntry view with the validation data

									echo view('register', $data);


								} else {
								//Add details to master table and if successfull add the to the other tables
					         //Calls the addEntry function in the AddressBook model
							// 		 $AddressBookModel = new AddressBookModel();
							// $AddressBookModel-> SignUp();
							// echo "<script>alert('You have successfully registered');</script>";
							//  echo view('header');
					    //     echo view('body');
					    //     echo view('footer');

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

							$values =[

								'fName'=> $fName,
	 							'lName'=> $lName,
	 							'emailAddress'=> $emailAddress,
	 							'country'=> $country,
	 							'county'=> $county,
	 							'addressLine1'=> $addressLine1,
	 							'addressLine2'=> $addressLine2,
	 							'addressLine3'=> $addressLine3,
	 							'city'=> $city,
	 							'password'=> $password,
	 							'phone'=> $phone,
							];
            $customerModel = new customerModel;
						$query = $customerModel->insert($values);
						echo "<script>alert('You have successfully registered');</script>";
						 echo view('header');
						     echo view('body');
						     echo view('footer');

							}

							}


		function Login(){
	        $validation = $this->validate([
	            'emailAddress'=>[
	                'rules'=>'required|valid_email|is_not_unique[member.emailAddress]',
	                'errors'=>[
	                    'required'=>'Email is required',
	                    'valid_email'=>'Enter a valid email address',
	                    'is_not_unique'=>'This email is not a registered email'
	                ]

	                ],
	             'password'=>[
	                'rules' => 'required|min_length[6]|max_length[20]',
	                'errors' =>[
	                    'required'=>'Password required',
	                    'min_length'=> 'Password must have minimum 6 char in length',
	                    'max_length'=> 'Password Must not have char more than 20 in length'
	                ]
	             ]

	        ]);
	        if(!$validation){
	            $data['validation'] = $this->validator;

	            echo view('login',$data);
	            // echo view('login',['validation'=>$this->validator]);

	            // $data = ['validation'=>$this->validator];
	            // echo view('header',$data);
	        }else{ echo "<script>alert('successfully logged');</script>";
		 echo view('header');
        echo view('body');
        echo view('footer');

}

}


}







?>
