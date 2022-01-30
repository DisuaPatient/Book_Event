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



	public function getLoggedInUserData($CustomerID){

		$builder = $this->db->table('customer');
		$builder->where('CustomerID');
		$result = $builder->get();
		if(count($result->getResultArray())==1){

			return $result->getRow();
		}
		else
		{
			return false;
		}

	}





   protected $table = 'customer';
	 protected $primaryKey = 'CustomerID';
   protected $allowedFields = ['FirstName','LastName','Email','AddressLine1','AddressLine2','City','County',
   'Country','Phone','Password'
   ];
	 protected $beforeInsert = ['beforeInsert'];
	 protected $beforeUpdate = ['beforeUpdate'];
	 protected $validationRules = [
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


	protected $useTimestamps = true;
	protected $createdField = 'created_at';
 	function isValidFileType($filetype) {
		$types=['image/gif','image/png','image/jpg','image/jpeg'];
		return in_array($filetype, $types)?true:false;
	}
 	function hashPassword($data) {
		$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		return $data;
 }
		function isAlreadyRegister($id){
        return $this->getWhere(['id'=>$id])->getRowArray()>0?true:false;
    }
    function updateUserData($data ,$id){
        return $this->update(['login_oauth_id'=>$id], $data);
    }
    function insertUserData($data){
        return $this->insert($data);
    }










}




	?>
