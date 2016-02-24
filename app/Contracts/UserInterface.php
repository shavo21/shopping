<?php namespace App\Contracts;

interface UserInterface{
	
	/**
	 * Get List of all users.
	 *
	 * @param array $formData search data
	 * @return Collection
	 */
	public function getAll($id);

	/**
	 * Get List of all users.
	 *
	 * @return Collection
	 */
	public function getList();

	/**
	 * Get one user.
	 *
	 * @param integer $id
	 * @return User
	 */
	public function getOne($id);
	/**
	 * Create new user.
	 *
	 * @param array $userData
	 * @return User
	 */
	public function createOne($userData);

	/**
	 * Update user data.
	 *
	 * @param integer $id
	 * @param array $userData
	 * @return bool
	 */
	public function updateOne($id, $userData);

	/**
	 * Remove user from storage.
	 *
	 * @param integer $id
	 * @return bool
	 */
	public function deleteOne($id);

	/**
	 * Upload a csv file.
	 *
	 * @param File $csvFile
	 * @param string $websiteId
	 * @return bool
	 */
	public function uploadCsv($csvFile, $websiteId = null);

}