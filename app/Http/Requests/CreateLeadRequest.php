<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateLeadRequest extends Request {

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
			'name' 			=> 'required',
			'email'			=> 'required',
			'company'	 	=> 'required',
			'phone' 		=> 'required',
			'message' 		=> 'required',
			'clientid' 		=> 'required',
			
		];
	}

}
