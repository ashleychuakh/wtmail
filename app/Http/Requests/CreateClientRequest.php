<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClientRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		//Set to true for accounts so that people can register
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'username' 			=> 'required',
			'password'	 		=> 'required',
			'company'		 	=> 'required',
			'email' 			=> 'required',
			'emailname' 		=> 'required',
			'emailsubject' 		=> 'required',
			'mailproviderid' 	=> 'required',
			//'status' 			=> 'required',
		];
	}

}
