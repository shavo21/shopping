<?php namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class UserCreateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
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
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'email|unique:users',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',
			'title' => 'required',
			'role' => 'in:user,shop_admin',
			'login' => 'unique:users',
		];
	}

	/**
	 * Make some changes before sending the request.
	 *
	 * @return array
	 */
	public function inputs()
	{
		$inputs = $this->all();
		$inputs['is_admin'] = false;
		$inputs['password'] = bcrypt($inputs['password']);
		if(!$this->has('login')){
			$inputs['login'] = substr($inputs['first_name'], 0, 1) . $inputs['last_name'];
		}
		return $inputs;
	}

}
