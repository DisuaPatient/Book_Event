<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\AddressBookModel;
use App\Models\customerModel;    //Loads the MasterNameModel  Model

class Dashboard extends BaseController
{

    function __construct() {
        /* Loads the form and url helper */
        helper(['form', 'url','html']);

        	$this->dModel = new customerModel();
    }

    public function index()
    {
        if (!session()->has('logged_user')){
					return redirect()->to (base_url() ."/login");
				}

				$CustomerID = session() ->get('logged_user');

				$data['userdata'] = $this->dModel->getLoggedInUserData($CustomerID);

				return view('landingPrototype_1', $data);



    }

}



?>
