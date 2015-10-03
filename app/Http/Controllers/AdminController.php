<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    
	/**
	 * Create a new instance of WebsitesController class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['getLogin', 'postLogin']]);
	}

    public function getLogin()
    {
        $data=[
        	'bodyKlass' => 'login-layout'
        ];
        return view('admin.login',$data);
    }

    public function postLogin(Request $request)
    {
    	$login = $request->get('login');
		$password = $request->get('password');

		if (Auth::attempt(['login' => $login, 'password' => $password, 'role' => 'admin' ]))
		{
		    return redirect()->action('AdminController@getDashboard');
		}
		else
		{
			return redirect()->back()->withError(trans('errors.incorrect'));
		}
    }

    public function getDashboard()
    {
    	$data =[
    		'bodyKlass' => 'no-skin',
    		'authUser' => Auth::user()
    	];
    	return view('admin.dashboard',$data);
    }

    public function getLogout()
    {
    	Auth::logout();
		return redirect()->action('AdminController@getLogin');
    }
}
