<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\UserInterface;
use Auth;
use File;

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

    /**
    * Render view for logging in the application administrator.
    * GET /admin/login
    *
    * @return view
    */
    public function getLogin()
    {
        $data=[
        	'bodyClass' => 'login-layout'
        ];
        return view('admin.login',$data);
    }

    /**
    * Login the application admin.
    * POST /admin/login
    *
    * @param  Request $request
    * @return view
    */
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

    /**
    * Render dashboard view for admin.
    * GET /admin/dashboard
    *
    * @return view
    */
    public function getDashboard()
    {
    	$data =[
    		'bodyClass' => 'skin-3 no-skin',
    		'authUser' => Auth::user()
    	];
    	return view('admin.dashboard',$data);
    }

    /**
    * Admin logout from the system.
    * GET /admin/logout
    *
    * @return response
    */
    public function getLogout()
    {
    	Auth::logout();
		return redirect()->action('AdminController@getLogin');
    }

    /**
    * Render view for users.
    * GET  /admin/users
    *
    * @param  UserInterface $userRepo,Request $request
    *
    * @return view
    */
    public function getUsers(UserInterface $userRepo,Request $request)
    {
        $users = $userRepo->getAll(Auth::user()->id);
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'authUser' => Auth::user(),
            'users' => $users,
            'request' => $request->all(),
        ];
        return view('admin.users',$data);
    }

    /**
    * Render view for editing user.
    * GET  /admin/edit-user/{id}
    *
    * @param  UserInterface $userRepo,$id
    *
    * @return view
    */
    public function getEditUser($id)
    {
        dd($id);
    }

    /**
    * Get remove user.
    * GET  /admin/remove-user/{id}
    *
    * @param  UserInterface $userRepo,$id
    *
    * @return view
    */
    public function getRemoveUser($id)
    {
        dd($id);
    } 

    /**
    * Get add new user.
    * GET  /admin/add-user/{id}
    *
    *
    * @return view
    */
    public function getAddUser()
    {
        $data = [
            'bodyClass' => 'skin-3 no-skin',
            'action' => 'add',
            'authUser' => Auth::user(),
        ];
        return view('admin.add-edit-user', $data);
    }

    /**
    * Post add new user.
    * POST  /admin/add-user/{id}
    *
    * @param  UserInterface $userRepo,UserInterface $request
    *
    * @return view
    */
    public function postAddUser(UserCreateRequest $request,UserInterface $userRepo)
    {
        $data = $request->inputs();
        if($data['profile_picture'] != "")
        {
            $path = public_path() . '/uploads/images/';
            $name = str_random();
            $logoFile = $request->file('profile_picture')->getClientOriginalExtension();
            $result = $request->file('profile_picture')->move($path, $name.'.'.$logoFile);
            $data['profile_picture'] = $name.'.'.$logoFile;
        }
        $user = $userRepo->createOne($data);
    }

}
