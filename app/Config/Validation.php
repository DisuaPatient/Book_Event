<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
	
	public $user_validation_rules = [ 
							  'FirstName' => [ 'label' => 'First Name',
											  'rules'  => 'required|max_length[20]',
											  'errors' => ['required' => '%s is a mandatory field',
                                                           'max_lentgh' => '%s must be no more than 20 character in length']
										 ],
							  'LastName' => [ 'label' => 'Last Name',
											  'rules'  => 'required|max_length[30]',
											  'errors' => ['required' => '%s is a mandatory field',
                                                           'max_lentgh' => '%s must be no more than 30 character in length']
										 ],
							  'AddressLine1' => [ 'label' => 'Address Line1',
											  'rules'  => 'required|max_length[40]',
											  'errors' => ['required' => '%s is a mandatory field',
														   'max_lentgh' => '%s must be no more than 40 character in length']
										 ],
							 'AddressLine2' => [ 'label' => 'Address Line2',
											  'rules'  => 'required|max_length[40]',
											  'errors' => ['required' => '%s is a mandatory field',
														   'max_lentgh' => '%s must be no more than 40 character in length']
										 ],
							  'City' => [ 'label' => 'city',
											  'rules'  => 'required',
											  'errors' => ['required' => '%s is a mandatory field',]
										 ],
							  'Country' => [ 'label' => 'country',
											  'rules'  => 'required',
											  'errors' => ['required' => '%s is a mandatory field',]
										 ],
										 
										 
							  'County' => [ 'label' => 'county',
											  'rules'  => 'required',
											  'errors' => ['required' => '%s is a mandatory field',]
										 ],

							  
										 
							  'Email'    => [ 'label' => 'email',
											'rules'  => 'required|regex_match[/^[_a-z0-9-]*(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/]',
											'errors' => ['required' => '%s is a mandatory field',
														 'regex_match' => 'This is not a valid %s address']
											],
											
							  'Phone' => [ 'rules'  => 'required|alpha_numeric|max_length[15]',
											'errors' => ['required' => '%s is a mandatory field',
														 'alpha_numeric' => '%s must be alpha numeric',
														 'max_lentgh' => '%s must be no more than 15 character in length']
											],				
							  'Password' => [ 'rules'  => 'required|alpha_numeric|max_length[15]',
											'errors' => ['required' => '%s is a mandatory field',
														 'alpha_numeric' => '%s must be alpha numeric',
														 'max_lentgh' => '%s must be no more than 15 character in length']
											]
							];
							
							
		public	$rules  = [	'FirstName' => [ 	'label' => 'First Name',
													'rules'  => 'required',
													'errors' => ['required' => 'You MUST enter a {field}']],

									'LastName' => [	'label' => 'Last Name',
													'rules'  => 'required',
													'errors' => ['required' => 'You MUST supply a {field}.']],
													
									'Email' =>	[	'label' => 'Email Address ',
													'rules'  => 'required|valid_email',
													'errors' => ['required' => 'You MUST supply an {field}.']],				

									

									'Password' => [	'label' => 'password',
														'rules'  => 'required',
														'errors' => ['required' => 'You MUST supply a {field}.']]

									
								];
	
}
