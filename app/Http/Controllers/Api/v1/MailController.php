<?php 

namespace App\Http\Controllers\Api\v1;

use DB;
use Log;
use Mail;
use Auth;
use JWTAuth;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Client;
use App\Models\Lead;
use App\Models\MailProvider;
use App\Models\TrackingData;



class MailController extends Controller {

	use Helpers;

	public function __construct()
	{
		$this->middleware('api.auth', ['except' => [
		]]);

		$this->middleware('cors', ['except' => [
		]]);
	}

	/**
	 * @api {post} /mail/send Send an Email
	 * @apiSampleRequest /api/mail/send
	 * @apiHeader  [Accept=application/json] application/json, text/plain.
	 * @apiHeader  Content-Type              application/x-www-form-urlencoded, raw.
	 * @apiVersion 1.0.0
	 * @apiName PostMailSend
	 * @apiGroup Mail
	 *
	 * @apiParam {String} name Name of Lead.
	 * @apiParam {String=*@*} email Email of Lead.
	 * @apiParam {String} phone Phone of Lead.
	 * @apiParam {String} company Company of Lead.
	 * @apiParam {String} message Message of Lead.
	 * @apiParamExample {json} Request-Example:
	 *  {
	 *     "name": "Zane J. Chua",
	 *     "email": "zane@webtailors.sg",
	 *     "phone": "85118687",
	 *     "company": "WebTailors (S) Pte Ltd",
	 *     "message": "HEELOOOOOOOOOOOOOOOOOOOOOOOO"
	 *  }
	 *
	 * @apiSuccess (Success 2xx) 201/Created Account successfully created.
	 * @apiSuccessExample Success-Response:
	 *  HTTP/1.1 201 OK
	 *
	 */

	public function postMailSend(Request $request)
	{ 
		$requestip = isset($request->ip) ? $request->ip : $_SERVER['REMOTE_ADDR'];

		$client = $this->auth->user();

		$lead = new Lead;
		$lead->name = $request->input("name");
		$lead->email = $request->input("email");
		$lead->company = $request->input("company");
		$lead->phone = $request->input("phone");
		$lead->message = $request->input("message");
		$lead->clientid = $client->id;
		$lead->save();

		$trackingdata = new TrackingData;
		$trackingdata->clienttoken = $client->token;
		$trackingdata->ipv4 = $requestip;
		$trackingdata->mailproviderid = $client->mailproviderid;
		$trackingdata->status = 0;
		$trackingdata->save();

		Mail::send('emails.contact', ['name' => $request->input("name"), 'email' => $request->input("email"), 'phone' => $request->input("phone"), 'company' => $request->input("company"), 'body' => $request->input("message")], function($message) use ($client)
		{
		    $message->to($client->email, $client->emailname)->subject($client->emailsubject);
		});

		return $this->response->created();
	}

	public function overrideMailerConfig($configs){
        Config::set('mail.driver',$configs['driver']);
        Config::set('mail.host',$configs['host']);
        Config::set('mail.port',$configs['port']);
        Config::set('mail.username',$configs['user']);
        Config::set('mail.password',$configs['passwd']);
        Config::set('mail.sendmail',$configs['sendmail']);

        $app = App::getInstance();

        $app['swift.transport'] = $app->share(function ($app) {
            return new TransportManager($app);
        });

        $mailer = new \Swift_Mailer($app['swift.transport']->driver());
        Mail::setSwiftMailer($mailer);
    }
}