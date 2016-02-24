<?php namespace App\Services;

use App\Contracts\UserInterface;
use League\Csv\Reader;
use Validator;
use File;
use App\User;

class UserService implements UserInterface{

	/**
	 * Object of User class.
	 *
	 * @var User
	 */
	private $user;

	/**
	 * Create a new instance of UserService class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->user = new User();
	}

	/**
	 * Get List of all users.
	 *
	 * @param array $formData search data
	 * @return Collection
	 */
	public function getAll($id)
	{
		$users = $this->user->whereNotIn('id',[$id]);
		return $users->paginate(1);
	}

	/**
	 * Get List of all users.
	 *
	 * @return Collection
	 */
	public function getList()
	{
		$users = $this->user->get();
		return $users;
	}

	/**
	 * Get one user.
	 *
	 * @param integer $id
	 * @return User
	 */
	public function getOne($id)
	{
		return $this->user->find($id);
	}

	/**
	 * Create new user.
	 *
	 * @param array $userData
	 * @return User
	 */
	public function createOne($userData)
	{
		return $this->user->create($userData);
	}

	/**
	 * Update user data.
	 *
	 * @param integer $id
	 * @param array $userData
	 * @return bool
	 */
	public function updateOne($id, $userData)
	{
		return $this->getOne($id)->update($userData);
	}

	/**
	 * Remove user from storage.
	 *
	 * @param integer $id
	 * @return bool
	 */
	public function deleteOne($id)
	{
		return $this->getOne($id)->delete();
	}

	/**
	 * Upload a csv file.
	 *
	 * @param File $csvFile
	 * @param string $websiteId
	 * @return bool
	 */
	public function uploadCsv($csvFile, $websiteId = null)
	{
		$usersList = [];
		$extension = $csvFile->getClientOriginalExtension();
		$newName = str_random() . $extension;
		$uploadPath = public_path() . '/uploads/csv/';
		$csvFile->move($uploadPath, $newName);
		$csvReader = Reader::createFromPath($uploadPath . $newName);

		$header = $csvReader->fetchOne();
		$users = $csvReader->setOffset(1)->fetchAssoc($header);
		foreach ($users as $user) {
			if($websiteId){
				$user['website_id'] = $websiteId;
			}
			$password = isset($user['password']) ? $user['password'] : str_random();
			$user['password'] = bcrypt($password);
			$newUser = $this->createOne($user);
			$usersList[] = $newUser;
		}
		File::delete($uploadPath . $newName);
		return $usersList;

	}
	
}