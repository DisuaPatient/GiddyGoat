<?php

namespace App\Controllers;

use App\Libraries\Template;


class Home extends BaseController
{

	function __construct()
    {
        /* Loads the form and url helper */
        helper(['form', 'url' , 'html' , 'php']);



	}

    public function index(){


    $data = array('title' => 'Giddy Goat Patchwork',
				  'body' => 'This the BODY');


	echo view('header');
	echo view('body');
	echo view('footer');
    }


    function classes(){

    $data = array(

    'title' => 'Classes',

    );

		 echo view('classes');

    }


    function fabrics(){

    $data = array(

    'title' => 'Fabrics',

    );

		echo view('fabrics');

     }


    function notions(){

    $data = array(

    'title' => 'Notions',

    );

		echo view('notions');


    }



    function gallery(){

    $data = array(

    'title' => 'Gallery',

    );


	 echo view('gallery');

    }



    function contact(){

    $data = array(

    'title' => 'Contact',

    );

	echo view('contact');


    }
	 function book(){

    $data = array(

    'title' => 'Book',

    );

		 echo view('book');

    }

	function cart(){

    $data = array(

    'title' => 'Cart',

    );

		 echo view('cart');

    }

	function header123(){

    $data = array(

    'title' => 'Header123',

    );

		//Load the view passing in all the store categories to be displayed
				echo view('header123', $data);

    }

	function login(){

    $data = array(

    'title' => 'Login',

    );

		 echo view('login');

    }

	function register(){

    $data = array(

    'title' => 'Register',

    );

		 echo view('register');

    }

	function Result(){

    $data = array(

    'title' => 'REsult',

    );

		 echo view('Result');

    }


}
