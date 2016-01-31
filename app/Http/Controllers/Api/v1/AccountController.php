<?php 

namespace App\Http\Controllers\Api\v1;

use DB;
use Log;
use Auth;
use JWTAuth;

use App\Mailers\AppMailer;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Client;

class AccountController extends Controller {

	use Helpers;

	public function __construct()
	{
		$this->middleware('api.auth', ['except' => [
			'postAccountLogin'
		]]);
	}

	/**
	 * @api {post} /account/login/ Login to Account
	 * @apiSampleRequest /account/login/
	 * @apiHeader  [Accept=application/json] application/json, text/plain.
	 * @apiHeader  Content-Type              application/x-www-form-urlencoded, raw.
	 * @apiVersion 1.0.0
	 * @apiName PostAccountLogin
	 * @apiGroup Account
	 *
	 * @apiParam {String} account-username Username.
	 * @apiParam {String} account- Password.
	 * @apiParamExample {json} Request-Example:
	 *  {
	 *     "username": "Username",
	 *     "password": "Password"
	 *  }
	 *
	 * @apiSuccess {String} token JSON Web Token generated for successful authentication.
	 *
	 * @apiSuccessExample Success-Response:
	 *  HTTP/1.1 200 OK
	 *  {
	 *     "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiYWRtaW4iOnRydWV9.TJVA95OrM7E2cBab30RMHrHDcEfxjoYZgeFONFh7HgQ",
	 *  }
	 *
	 * @apiError 401/Unauthorized Invalid Login Details
	 * @apiErrorExample 401 Unauthorized Response:
	 *  HTTP/1.1 401 Unauthorized
	 *  {
	 *     "message": "Unauthorized",
	 *     "status_code": 401,
	 *     "debug": {
	 *          "line": 123,
	 *          "file": "/srv/http/www/meggnify/vendor/dingo/api/src/Auth/Auth.php",
	 *          "class": "Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException",
	 *          "trace": [...]
	 *     }
	 *  }
	 *
	 * @apiError 500/InternalError An Internal Error has occured.
	 * @apiErrorExample 500 Internal Error Response:
	 *  HTTP/1.1 500 Internal Error
	 *  {
	 *     "message": "Internal Error",
	 *     "status_code": 500,
	 *     "debug": {
	 *          "line": 123,
	 *          "file": "/srv/http/www/meggnify/vendor/dingo/api/src/Http/Response/Factory.php",
	 *          "class": "Symfony\Component\HttpKernel\Exception\HttpException",
	 *          "trace": [...]
	 *     }
	 *  }
	 *
	 */

	public function postAccountLogin(Request $request)
	{ 
		$auth = auth()->guard('api');

		$creds = [
	  	'username' => $request->input("username"), 
	  	'password' => $request->input("password")
		];

		try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($creds)) {
                return $this->response->errorUnauthorized();
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return $this->response->errorInternal();
        }

        $client = Client::find($auth->user()->id);
        $client->token = $token;
        $client->save();

		return response()->json(compact('token'))->setStatusCode(200);
	}
}