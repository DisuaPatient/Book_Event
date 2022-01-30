<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\AddressBookModel;
use App\Models\customerModel;    //Loads the MasterNameModel  Model

class Home extends BaseController
{

    function __construct() {
        /* Loads the form and url helper */
        helper(['form', 'url','html']);
        $this->session = \Config\Services::session();
        $this-> customerModel = new customerModel();
    }

    public function index()
    {
        $data = [];
          echo view('header');
          echo view('landingPrototype_1');
          echo view('footer');
    }
    function adminPortal(){
        echo view('header');
        echo view('adminPortal');
        echo view('footer');
    }
    function loginForm(){
        echo view('loginForm');
    }

	function BookingEvent(){

		    echo view('header');
        echo view('BookingEvent');
		    echo view('footer');

    }
	function login(){
		echo view('header');
        echo view('login');
		echo view('footer');
    }

	function register1(){
		echo view('header');
        echo view('register1');
		echo view('footer');
    }


    function paymentForm(){
        echo view('paymentForm');
    }

    function CustomerPayment(){
      echo view('header');
      echo view('CustomerPayment');
      echo view('footer');
    }

    function ViewCustomer(){
      echo view('header');
      echo view('ViewCustomer');

    }

    function staffPortal(){
        echo view('header');
        echo view('staffPortal');
        echo view('footer');
    }
    function viewEventDetails(){
        echo view('header');
        echo view('eventDetails');
        echo view('footer');
    }

}



?>
