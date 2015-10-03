<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;
class Administrator {


	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (!Auth::check())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->action('AdminController@getLogin');
			}
		}
		else 
		{
			if (Auth::user()->role != 'admin')
			{
				if ($request->ajax())
				{
					return response('Unauthorized.', 401);
				}
				else
				{
					return redirect()->action('AdminController@getLogin');
				}
			}
		}

		return $next($request);
	}

}
