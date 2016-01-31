<?php 

namespace App\Http\Controllers\Api\v1;

use DB;
use Log;
use JWTAuth;

use App\Mailers\AppMailer;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\AccountExtras;

class AccountController extends Controller {

	use Helpers;

	public function __construct()
	{
		$this->middleware('api.auth', ['except' => [
			'postAccountCreate', 
			'postAccountLogin',
			'test'
		]]);
	}

	public function postAccountExtrasUpdate(Account $account, Request $request)
	{
		$account = isset($account->id) ? $account : $this->auth->user();
		$accountextras = $account->extras;

	    $accountextras->nationality     	= $request->input("nationality");
		$accountextras->ethnicity     		= $request->input("ethnicity");
		$accountextras->residence 	   		= $request->input("residence");
		$accountextras->address 	   		= $request->input("address");
		$accountextras->unitnumber	   		= $request->input("unitnumber");
		$accountextras->postalcode	   		= $request->input("postalcode");
		$accountextras->occupation 			= $request->input("occupation");
		$accountextras->education 			= $request->input("education");
		$accountextras->income 				= $request->input("income");
		$accountextras->maritalstatus 		= $request->input("maritalstatus");
		$accountextras->bank 				= $request->input("bank");
		$accountextras->bankaccounttype		= $request->input("bankaccounttype");
		$accountextras->bankaccountnumber 	= $request->input("bankaccountnumber");
	    $accountextras->accountid 			= $account->id;

	    $token = JWTAuth::fromUser($account);

		if (!$accountextras->save())
		{
            return $this->response->errorInternal("Invalid Password");
		}
		else
		{
			return response()->json(compact('token'))->setStatusCode(200);
		}
	}

	public function test()
	{
    	return $this->response->errorInternal("Account does not Exist");
	}
}