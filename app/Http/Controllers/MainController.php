<?php

namespace App\Http\Controllers;

use DB;
use View;
use Input;
use Log;
use Hash;
use Auth;
use Session;
use Redirect;
use DateTime;
use Validator;
use Flash;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Client;
use App\Models\Lead;
use App\Models\MailProvider;
use App\Models\TrackingData;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAccountRequest;
use App\Http\Requests\CreateAccountRequest;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\CreateLeadRequest;
use App\Http\Requests\CreateMailProviderRequest;
use App\Http\Requests\CreateTrackingDataRequest;


class MainController extends Controller
{

   public function __construct()
    {
		$this->middleware('auth',['except' => ['index', 'getAccountLogin', 'postAccountLogin']]);	
    }

    public function index(){
    	if(Auth::guard("web")->check()){
			return redirect()->back();
		}
    	return view('main');
    }

	/*
	|
	|--------------------------------------------------------------------------
	| Account Controllers
	|--------------------------------------------------------------------------
	|
	*/

	public function home()
	{
		return view("home");
	}

	public function getAccountLogin()
	{ 
		if(Auth::guard("web")->check()){
			return redirect()->back();
		}
		return view('auth.login');
	}

	public function postAccountLogin(LoginAccountRequest $request)
	{
		Flash::error('Invalid Credentials');
		$field = filter_var($request->input("username"), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		$creds = [
		  	$field 	   => $request->input("username"), 
		  	'password' => $request->input("password")
		];
		
		if (Auth::guard("web")->attempt($creds) ) {
			if(Auth::guard("web")->check()){
				return redirect('/home');
			}	
		}

		Flash::error('Invalid Credentials');
		return redirect()->back();
	}

	public function getAccountRegister()
	{ 
		return view("auth.register");
	}

	public function postAccountRegister(CreateAccountRequest $request)
	{
		if(DB::table("accounts")->where("email", "=", $request->input("account-email"))->count() >= 1)
		{

		}
		else
		{
			$account = new Account;
			$account->firstname     = $request->input("firstname");
			$account->username     	= $request->input("username");
			$account->password     	= $request->input("password");
			$account->email 	   	= $request->input("email");
			$account->usertype 	   	= 1;
			$account->status 	   	= 0;
			$account->save();

			return redirect('/home');
		}
	}

	public function logout(){
		Auth::guard("web")->logout();
		return Redirect::to("login"); 
	}

	public function getCreateAccount(){
		return view("account.createAccount");
	}

	public function postCreateAccount(CreateAccountRequest $request)
	{
		if(DB::table("accounts")->where("email", "=", $request->input("account-email"))->count() >= 1)
		{

		}
		else
		{
			$account = new Account;
			$account->firstname     = $request->input("firstname");
			$account->username     	= $request->input("username");
			$account->password     	= Hash::make($request->input("password"));
			$account->email 	   	= $request->input("email");
			$account->usertype 	   	= 1;
			$account->status 	   	= 0;
			$account->save();

			return redirect('/readAccount');
		}
	}

	public function getReadAccount(){
		$accounts = Account::all();
		return view("account.readAccount", compact("accounts"));
	}

	public function getUpdateAccount(Account $account){	
		return view("account.updateAccount", compact("account"));
	}

	public function postUpdateAccount(Account $account, Request $request){
		if(Hash::check($request->input("currentpassword"), $account->password)){
			if(!empty(Input::get("newpassword"))){
				$account->password = $request->input("newpassword");
			}

			$account->email = $request->input("email");
			$account->firstname = $request->input("firstname");
			$account->usertype = $request->input("usertype");
			$account->status = $request->input("status");
			$account->save();
			
			Flash::success('Account Details updated');
		} else{
			Flash::error('Invalid Credentials');
		}
		
		return redirect("/readAccount");
	}

	public function getRemoveAccount(Account $account){
		$account->delete();
		return redirect()->back();
	}

	/*
	|
	|--------------------------------------------------------------------------
	| Client Controllers
	|--------------------------------------------------------------------------
	|
	*/

	public function getCreateClient(){
		return view("client.createClient");
	}

	public function postCreateClient(CreateClientRequest $request) {
		if(DB::table("clients")->where("email", "=", $request->input("email"))->count() >= 1)
		{

		}
		else
		{
			$client = new Client;
			$client->username     		= $request->input("username");
			$client->password 	    	= Hash::make($request->input("password"));
			$client->company			= $request->input("company");
			$client->token				= str_random(289);
			$client->email 		   		= $request->input("email");
			$client->emailname 	   		= $request->input("emailname");
			$client->emailsubject    	= $request->input("emailsubject");
			$client->mailproviderid 	= 1;
			$client->status 	   		= 0;
			$client->save();

			return redirect("/readClient");
		}
	}

	public function getReadClient(){
		$clients = Client::all();
		return view("client.readClient", compact("clients"));
	}

	public function getUpdateClient(Client $client){
		return view("client.updateClient", compact("client"));
	}

	public function postUpdateClient(Client $client, Request $request){
		if(Hash::check($request->input("currentpassword"), $client->password)){
			
			if(!empty(Input::get("newpassword"))){
				$client->password = $request->input("newpassword");
			}

			$client->company 			= $request->input("company");
			$client->email 				= $request->input("email");
			$client->emailname 			= $request->input("emailname");
			$client->emailsubject 		= $request->input("emailsubject");
			$client->mailproviderid 	= $request->input("mailproviderid");

			$client->save();
			
			Flash::success('Client Account Details updated');
		} else {
			Flash::error('Invalid Credentials');
		}
		
		return redirect("/readClient");
	}

	public function getRemoveClient(Client $client){
		$client->delete();
		return redirect()->back();
	}

	/*
	|
	|--------------------------------------------------------------------------
	| Lead Controllers
	|--------------------------------------------------------------------------
	|
	*/

	public function getCreateLead(){
		return view("lead.createLead");
	}

	public function postCreateLead(CreateLeadRequest $request) {
		if(DB::table("leads")->where("email", "=", $request->input("email"))->count() >= 1)
		{

		}
		else
		{
			/*
			if(DB::table("clients")->where("clientid", "=", $request->input("clientid"))){
				Flash::error('Please enter a valid Client ID.');
			}*/

			$lead = new Lead;
			$lead->name     			= $request->input("name");
			$lead->email 		   		= $request->input("email");
			$lead->company				= $request->input("company");
			$lead->phone 	   			= $request->input("phone");
			$lead->message    			= $request->input("message");
			$lead->clientid 			= $request->input("clientid");
			$lead->status 	   			= 0;
			
			$lead->save();

			return redirect("/readLead");
		}
	}

	public function getReadLead(){
		$leads = Lead::all();
		return view("lead.readLead", compact("leads"));
	}

	public function getUpdateLead(Lead $lead){
		return view("lead.updateLead", compact("lead"));
	}

	public function postUpdateLead(Lead $lead, Request $request){
		if(Auth::guard("web")->check($request->input("username"), $lead->username)){
			

			$lead->name 			= $request->input("name");
			$lead->email 			= $request->input("email");
			$lead->company 			= $request->input("company");
			$lead->phone 			= $request->input("phone");
			$lead->message 			= $request->input("message");
			$lead->clientid 		= $request->input("clientid");

			$lead->save();
			
			Flash::success('Lead Details updated');
		} else {
			Flash::error('Invalid Credentials');
		}
		
		return redirect("/readLead");
	}

	public function getRemoveLead(Lead $lead){
		$lead->delete();
		return redirect()->back();
	}

	/*
	|
	|--------------------------------------------------------------------------
	| Mail Provider Controllers
	|--------------------------------------------------------------------------
	|
	*/

	public function getCreateMailProvider(){
		return view("mailProvider.createMailProvider");
	}

	public function postCreateMailProvider(CreateMailProviderRequest $request) {
		if(DB::table("mailproviders")->where("name", "=", $request->input("name"))->count() >= 1)
		{

		}
		else
		{
			$mailProvider = new MailProvider;
			$mailProvider->name     			= $request->input("name");
			$mailProvider->driver				= $request->input("driver");
			$mailProvider->host					= $request->input("host");
			$mailProvider->port					= $request->input("port");
			$mailProvider->encryption			= $request->input("encryption");
			$mailProvider->username				= $request->input("username");
			$mailProvider->password				= Hash::make($request->input("password"));
			$mailProvider->sendmail				= $request->input("sendmail");
			$mailProvider->pretend				= $request->input("pretend");
			$mailProvider->fromemail			= $request->input("fromemail");
			$mailProvider->fromname				= $request->input("fromname");
			$mailProvider->status 	   			= $request->input("status");
			
			$mailProvider->save();

			return redirect("/readMailProvider");
		}
	}

	public function getReadMailProvider(){
		$mailProviders = MailProvider::all();
		return view("mailProvider.readMailProvider", compact("mailProviders"));
	}

	public function getUpdateMailProvider(MailProvider $mailProvider){
		return view("mailProvider.updateMailProvider", compact("mailProvider"));
	}

	public function postUpdateMailProvider(MailProvider $mailProvider, Request $request){
	
		if(Hash::check($request->input("currentpassword"), $mailProvider->password)){		
			if(!empty($request->input("newpassword"))){
				$mailProvider->password = Hash::make($request->input("newpassword"));
			}

			$mailProvider->driver				= $request->input("driver");
			$mailProvider->host					= $request->input("host");
			$mailProvider->port					= $request->input("port");
			$mailProvider->encryption			= $request->input("encryption");
			$mailProvider->username				= $request->input("username");
			$mailProvider->sendmail				= $request->input("sendmail");
			$mailProvider->pretend				= $request->input("pretend");
			$mailProvider->fromemail			= $request->input("fromemail");
			$mailProvider->fromname				= $request->input("fromname");
			$mailProvider->status 	   			= $request->input("status");

			$mailProvider->save();
			
			Flash::success('Mail Provider Details updated');
		} else {
			Flash::error('Invalid Credentials');
		}
		
		return redirect("/readMailProvider");
	}

	public function getRemoveMailProvider(MailProvider $mailProvider){
		$mailProvider->delete();
		return redirect()->back();
	}


	/*
	|
	|--------------------------------------------------------------------------
	| Tracking Data Controllers
	|--------------------------------------------------------------------------
	|
	*/

	public function getCreateTrackingData(){
		return view("trackingData.createTrackingData");
	}

	public function postCreateTrackingdata(CreateTrackingDataRequest $request){
		if(DB::table("trackingdata")->where("ipv4", "=", $request->input("ipv4"))->count() >= 1) {

		} else {
			/*if(DB::table("clients")->where("clienttoken", "=", $request->input("clienttoken"))){
				Flash::error("Please enter a valid Client Token number");
				return redirect("/createTrackingData");
			}

			if(DB::table("mailproviders")->where("mailproviderid", "=", $request->input("mailproviderid"))){
				Log::info("wrong mpd");
				Flash::error("Please enter a valid Mail Provider ID.");

				return redirect("/createTrackingData");
			}*/

				$trackingdata = new TrackingData;

				$trackingdata->clienttoken     		= $request->input("clienttoken");
				$trackingdata->ipv4					= $request->input("ipv4");
				$trackingdata->mailproviderid		= $request->input("mailproviderid");
				$trackingdata->status 	   			= $request->input("status");
				
				$trackingdata->save();

				return redirect("/readTrackingData");
		}
	}

	public function getReadTrackingData(){
		$trackingdatas = TrackingData::all();
		return view("trackingData.readTrackingData", compact("trackingdatas"));
	}

	public function getUpdateTrackingData(TrackingData $trackingdata){
		return view("trackingData.updateTrackingData", compact("trackingdata"));
	}

	public function postUpdateTrackingData(TrackingData $trackingdata, Request $request){

		if(Auth::guard("web")->check($request->input("ipv4"), $trackingdata->ipv4)){

			$trackingdata->clienttoken			= $request->input("clienttoken");
			$trackingdata->ipv4					= $request->input("ipv4");
			$trackingdata->mailproviderid		= $request->input("mailproviderid");
			$trackingdata->status 	   			= $request->input("status");

			$trackingdata->save();
			
			Flash::success('Tracking DataDetails updated');
			
		} else {
			Flash::error('Invalid Credentials');
		}
		
		return redirect("/readTrackingData");
	}

	public function getRemoveTrackingData(TrackingData $trackingdata){
		$trackingdata->delete();
		return redirect()->back();
	}
}
