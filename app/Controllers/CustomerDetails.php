<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\SeeStore;

class CustomerDetails extends BaseController {

	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url']);

		//Create an instance of the SeeStore Model
		$SeeStoreModel = new SeeStore();

	}


    public function GetCategoryItems($fabric_type_id) {

		//Create a NewsModel
		$SeeStoreModel = new SeeStore();   //Create an instance of the AddressBook model

        //Saves the category of the item selected on the view
        //$data['cat_id'] = $cat_id;

        $data['display_block'] = "";

        $data['display_block'] = $SeeStoreModel->get_category_items($fabric_type_id);

        //Load the view passing in all the store categories to be displayed
        echo view('fabrics', $data);

		if (isset($_POST['fabric_id'])) {

            echo "Got here: Item ID  " . $this->input->get('fabric_id');

            //Get details of Item selected
            //Display the details of the Item selected.
        }
    }

    public function GetCategoryItemDetails($fabric_type_id) {

		//Create a NewsModel
		$SeeStoreModel = new SeeStore();   //Create an instance of the AddressBook model


        $data['display_block'] = "";
        $data['display_block'] .= "<h1>My Store - Item Detail</h1>";
        $data['fabric_id'] = $fabric_id;

        //$data['display_block'] .= $SeeStoreModel->get_category_item_details($item_id);
		$data['itemDetails'] = $AddressBookModel->get_category_item_details($fabric_id);
		$data['itemColors'] = $AddressBookModel->get_category_item_colours($fabric_id);
		$data['itemSizes'] = $AddressBookModel->get_category_item_sizes($fabric_id);

		//print_r($data);
        //Load the view passing in all the store categories to be displayed
        echo view('ShowItemDetails2', $data);
    }

}

?>
