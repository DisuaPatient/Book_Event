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
				 $data = [];
        helper(['form', 'url','html']);
				$this->session = \Config\Services::session();
		$validation = \Config\Services::validation();
    $AddressBookModel = new AddressBookModel();



	}


    public function index() {

    $data = [];
		//Render the mymenu view
       echo view('header');
        echo view('landingPrototype_1');
        echo view('footer');
    }


	 function Register (){

		$validation = \Config\Services::validation();
		$rules  = [
		             'FirstName' => [ 	'label' => 'First Name',
													'rules'  => 'required',
													'errors' => ['required' => ' {field} Requested']],

									'LastName' => [	'label' => 'Last Name',
													'rules'  => 'required',
													'errors' => ['required' => '{field} Requested']],

									'Account_AccountID' => [	'label' => 'Account',
															'rules'  => 'required',
												    	'errors' => ['required' => 'Customer {field} Requested']],

									'Email' => [	'label' => 'Email',
																'rules'  => 'required',
																'errors' => ['required' => '{field} Requested']],

									'AddressLine1' => [	'label' => 'AddressLine1',
																'rules'  => 'required',
																'errors' => ['required' => '{field} Requested']],

									'AddressLine2' => [	'label' => 'AddressLine2',
															'rules'  => 'required',
															'errors' => ['required' => '{field} Requested']],

								'City' => [	'label' => 'City',
																'rules'  => 'required',
																'errors' => ['required' => '{field} Requested']],

								'Country' => [	'label' => 'Country',
																'rules'  => 'required',
																'errors' => ['required' => '{field} Requested']],

								'County' => [	'label' => 'County',
																'rules'  => 'required',
																'errors' => ['required' => '{field} Requested']],

									'Phone' =>	[	'label' => 'Phone',
													'rules'  => 'required',
													'errors' => ['required' => '{field} Requested']],

									'Password' => [	'label' => 'Password',
													 'rules' => 'required|min_length[6]|max_length[20]',
														'errors' =>[
															 'required'=>'Password required',
															 'min_length'=> 'Password must have minimum 6 char in length',
															 'max_length'=> 'Password Must not have char more than 20 in length'
													 ]],
									'password_confirm' => 'matches[Password]'
								];




			if (! $this->validate($rules)) {
				//Get validator details - error messgaes etc.
				$data['validation'] = $this->validator;

				//Load the addEntry view with the validation data
				echo view('header');
				echo view('register1', $data);
				echo view('footer');

			} else {
			//Add details to master table and if successfull add the to the other tables
         //Calls the addEntry function in the AddressBook model
			 $AddressBookModel = new \App\Models\AddressBookModel();
		  $data['customers'] =$AddressBookModel-> SignUp();
		echo "<script>alert('You have successfully registered');</script>";
		 echo view('header');
        echo view('landingPrototype_1');
        echo view('footer');

		}

		}


		function Login(){
			         $data = [];
							 helper(['form']);
							 if ($this->request->getMethod() == 'post') {
	        $validation = $this->validate([
	            'Email'=>[
	                'rules'=>'required|valid_email|is_not_unique[customer.Email]',
	                'errors'=>[
	                    'required'=>'Email is required',
	                    'valid_email'=>'Enter a valid email address',
	                    'is_not_unique'=>'This email is not a registered email'
	                ]

	                ],
	             'Password'=>[
	                'rules' => 'required|is_not_unique[customer.password]',
	                'errors' =>[
	                    'required'=>'Password required',
	                    'is_not_unique'=> 'The password is incorrect'
	                ]
	             ]

	        ]);
	        if(!$validation){
	            $data['validation'] = $this->validator;
	            echo view('header');
	            echo view('login',$data);
	            // echo view('login',['validation'=>$this->validator]);
	            echo view('footer');
	            // $data = ['validation'=>$this->validator];
	            // echo view('header',$data);

	        }else{

						$AddressBookModel = new AddressBookModel();
						$customerModel = new customerModel();
						$CustomerID = $AddressBookModel->ValidUser();

						$user = $customerModel->where('CustomerID', $this->request->getVar('CustomerID'))
																																				;

						$this->setUserSession($user);


			echo "<script>alert('You have successfully registered');</script>";
		 echo view('header');
        echo view('landingPrototype_1');
        echo view('footer');
			}
}
}
          function setUserSession($user){
          $data = [
	          'isLoggedIn' => true,
               ];
                   session()->set($data);
                  return true;
}

 	        	function logout(){
	          session()->destroy();

	       echo view('header');
 		       echo view('landingPrototype_1');
 		     echo view('footer');
 }



   function BookEvent() {
		 $AddressBookModel = new AddressBookModel();
		 $CustomerID = $AddressBookModel->ValidUser();
		 $session = session();
		 if(!empty($CustomerID)){
			 $session->set('user',$CustomerID);
			 echo view('login');
  	 }else{
			 echo view('login');
		 }
	$validation = \Config\Services::validation();
	$rules  = [

	              	'Account_AccountID' => [	'label' => 'Account',
							     	'rules'  => 'required',
							      	'errors' => ['required' => 'You MUST supply a {field}.']],

							 'EventStatus' => [ 	'label' => ' Type Of Events',
												'rules'  => 'required',
												'errors' => ['required' => 'You MUST enter a {field}']],

								'CostTotal' => [	'label' => 'Estimation Amount',
												'rules'  => 'required',
												'errors' => ['required' => 'You MUST supply a {field}.']],

								'NoOfGuests' =>	[	'label' => 'Estimation Numbers of people',
												'rules'  => 'required',
												'errors' => ['required' => 'You MUST supply an {field}.']],

								'RequestDate' =>	[	'label' => 'Date',
																'rules'  => 'required',
																'errors' => ['required' => 'You MUST supply an {field}.']],

								'Notes' =>	[	'label' => 'Query',
								 												'rules'  => 'required',
								 												'errors' => ['required' => 'You MUST supply an {field}.']]
							];


	if (! $this->validate($rules)) {
		//Get validator details - error messgaes etc.
		$data['validation'] = $this->validator;

		//Load the Booking view with the validation data
		echo view('header');
		echo view('BookingEvent', $data);
		echo view('footer');

	} else {
	//Add details to master table and if successfull add the to the other tables
		 //Calls the Booking function in the AddressBook model
		$AddressBookModel = new \App\Models\AddressBookModel();
    $AddressBookModel-> AddBooking();

      echo "<script>alert('You have successfully Booked');</script>";
     echo view('header');
		echo view('landingPrototype_1');
		echo view('footer');

}


			 }

			 function UpdateCustomer($CustomerID){
	        $AddressBookModel = new \App\Models\AddressBookModel();
	        $data['customers'] = $AddressBookModel->updateCustomer();
	        echo view('header');
	        echo view('Update_Details',$data);
	        echo view('footer');
	    }

			function ViewCustomerProfile($CustomerID){

        $AddressBookModel = new \App\Models\AddressBookModel();
        $data['customers'] = $AddressBookModel->getCustomerByID($CustomerID);

        echo view('header', $data);
        echo view('ViewCustomer', $data);
        echo view('footer');
    }



}







?>
