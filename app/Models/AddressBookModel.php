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
$builder = $db->table('customer'); //Specify the table to run query on

	 //Data to add to the Customer table
	 $AddressLine1=$_POST['AddressLine1'];
	 $AddressLine2=$_POST['AddressLine2'];
	 $City=$_POST['City'];
	 $Country=$_POST['Country'];
	 $County=$_POST['County'];
	 $Email=$_POST['Email'];
	 $FirstName=$_POST['FirstName'];
	 $LastName=$_POST['LastName'];
	 $Password=$_POST['Password'];
	 $Phone=$_POST['Phone'];
	  $Account_AccountID=$_POST['Account_AccountID'];
	 //Call stored procedure to insert into the customer name table
     $this->db->query(" CALL RegisterCustomer('$AddressLine1','$AddressLine2','$City','$Country','$County',
     '$Email','$FirstName','$LastName','$Password','$Phone',$Account_AccountID)");
	 //The Output Parameter - Retrieve the new master_id for the new contact just added
     $CustomerID_Value = $db->query("SELECT @CustomerID as CustomerID")->getRow();
     $CustomerID = $CustomerID_Value->CustomerID;
     return $CustomerID;
 }

 // login function
 function ValidUser(){

	 $db = \Config\Database::connect(); //Connect to the database
     $builder = $db->table('customer'); //Specify the table to run query on

	 //Data to add to the Customer table
	 $CustomerID = "";
	 $Email = $_POST['Email'];
	 $Password = $_POST['Password'];
	 $query = $this->db->query(" CALL Login('$Email','$Password')");

	 if ($query->getNumRows()>0){
	 foreach($query->getResultArray() as $customer){

      $CustomerID = $customer['CustomerID'];
	 }
	 }
	 else{
	 }
	  $query->freeResult();
	 return $CustomerID;
 }

    function getCustomerID(){
        $query = $this->db->query("Call Login");
        $result = $query->getResultArray();
        $query->freeResult();
        return $result;
    }

		// function getCustomerByID(){
    //     $CustomerID = $_SESSION['customer'];
    //     $query = $this->db->query("Call getCustomerByID()");
    //     $result = $query->getRowArray();
    //     $query->freeResult();
    //     return $result;
    // }


		public function AddBooking()
	     {
				 $db = \Config\Database::connect(); //Connect to the database
				 $builder = $db->table('event'); //Specify the table to run query on

 					 //Data to add to the Customer table

 					 $CostTotal=$_POST['CostTotal'];
 					 $EventStatus=$_POST['EventStatus'];
 					 $NoOfGuests=$_POST['NoOfGuests'];
					 $Notes=$_POST['Notes'];
					 $RequestDate=$_POST['RequestDate'];
					 $Account_AccountID=$_POST['Account_AccountID'];
 					 //Call stored procedure to insert into the event name table
 				    $this->db->query(" CALL EventRequirements('$CostTotal', '$EventStatus',
						'$NoOfGuests', '$Notes','$RequestDate',$Account_AccountID)");
 					 //The Output Parameter - Retrieve the new EventID for the new contact just added
 				     $EventID_Value = $db->query("SELECT @EventID as EventID")->getRow();
 				     $EventID = $EventID_Value->EventID;
 				     return $EventID;


	 	}

		function insert_Account($CustomerID){
	 $this->db->query("CALL Account('$Customer_CustomerID','$AccountName', @AccountID)");
	 $AccountID_Value = $this->db->query("SELECT @AccountID as AccountID")->getRow();
	 $AccountID = $AccountID_Value->AccountID;
	 return $AccountID;

 }

 function getCustomerByID($CustomerID){
	 $query = $this->db->query("Call ViewCustomerDetails()");
	 $result = $query->getResultArray();
	 $query->freeResult();
	 return $result;
}



 function updateCustomer($CustomerID){

	 $db = \Config\Database::connect(); //Connect to the database
	 $builder = $db->table('customer'); //Specify the table to run query on

	      $AddressLine1=$_POST['AddressLine1'];
	      $AddressLine2=$_POST['AddressLine2'];
	      $City=$_POST['City'];
       	$Country=$_POST['Country'];
       	$County=$_POST['County'];
	      $Email=$_POST['Email'];
      	$FirstName=$_POST['FirstName'];
       	$LastName=$_POST['LastName'];
      	$Password=$_POST['Password'];
       	$Phone=$_POST['Phone'];
	   $this->db->query(" CALL UpdateCustomerInformation('$AddressLine1','$AddressLine2','$City','$Country','$County',
	      '$Email','$FirstName','$LastName','$Password','$Phone')");

    }


}


	?>
