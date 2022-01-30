<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\SeeStore;

class Home extends BaseController
{
	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url']);
    }

    public function index() {

		//Create a NewsModel
		$SeeStoreModel = new SeeStore();

		$data['display_block'] = $SeeStoreModel->getFabricTypes();

		//Load the view passing in all the store categories to be displayed
		echo view('header123', $data);


		//Saves the category of the item selected on the view
		//if ($this->input->get('cat_id')) {

	/*	if (isset($_POST['fabric_type_id'])) 	{
			 	$data['display_block'] = "";
				//$data['cat_id'] = $this->input->get('cat_id');

				//Gets all the store categories items for selected item $cat_id

				$data['display_block2'] = $SeeStoreModel->get_category_items($this->input->get('fabric_type_id'));


		}*/
	}


	public function Login() {

		//Create a SeeStore instance
		$SeeStoreModel = new SeeStore();

		//Set Validation Rules
		$validation_rules = [	'email' => [ 'label' => 'Email Address',
														'rules'  => 'required|valid_email',
														'errors' => ['required' => 'You MUST enter an {field}'],
																		 'valid_email' => 'You MUST enter a valid {field}'],

								'password' => [	'label' => 'Password',
															'rules'  => 'required',
															'errors' => ['required' => 'You MUST enter an {field}']]];
		//If validation does not pass
        if (!$this->validate($validation_rules)) {
			//Get validator details - error messgaes etc.
			$data['validation'] = $this->validator;

			//Load the Login view with the validation data
			echo view('Login.php', $data);

		}else if (isset($_POST['Login'] )) {
			if ($SeeStoreModel->validUser()) {
				$this->Load();
			}
		}
	}

		public function Logout() {

			if (isset($_SESSION)) {
				if (isset($this->session->member_id)) {
					$this->session->remove('member_id');  //Delete session variables
				}
				$this->session->destroy();			//Delete the session
				$this->Login();

			}
		}
}
?>
